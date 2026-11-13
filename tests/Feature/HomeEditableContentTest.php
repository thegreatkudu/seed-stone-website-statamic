<?php

use Statamic\Facades\Entry;

/**
 * Every text block on the home page below the hero comes from the Home
 * entry, so editors can change it in the control panel.
 */
test('the home entry passes its own blueprint validation', function () {
    $home = Entry::find('home');

    $fields = $home->blueprint()->fields()->addValues($home->data()->all())->preProcess();

    expect(fn () => $fields->validator()->validate())->not->toThrow(Exception::class);
});

test('every editable section renders its text from the home entry', function () {
    $home = Entry::find('home');
    $response = $this->get('/')->assertSuccessful();

    $singles = [
        'stages_heading', 'stages_text',
        'projects_heading', 'projects_text', 'projects_link_label',
        'record_tag', 'record_heading', 'record_text', 'record_button_label',
        'truss_tag', 'truss_heading', 'truss_text', 'truss_button_label', 'truss_note',
        'lab_tag', 'lab_heading', 'lab_text', 'lab_button_label',
        'research_tag', 'research_heading', 'research_text', 'research_link_label',
        'research_quote', 'research_quote_initials', 'research_quote_source', 'research_quote_meta',
        'delivery_tag', 'delivery_heading', 'delivery_text', 'delivery_note', 'delivery_note_link_label',
        'faq_tag', 'faq_heading', 'faq_text', 'faq_link_label',
        'cta_heading', 'cta_text', 'cta_primary_label', 'cta_secondary_label',
    ];

    foreach ($singles as $handle) {
        expect($home->get($handle))->not->toBeEmpty("{$handle} is empty");
        $response->assertSee($home->get($handle));
    }

    $grids = [
        'stages' => ['label', 'text'],
        'project_cards' => ['tag', 'title', 'text'],
        'registrations' => ['status', 'label', 'meta'],
        'truss_points' => ['title', 'text'],
        'research_metrics' => ['label', 'value', 'text'],
        'research_papers' => ['title', 'topic'],
        'delivery_tiers' => ['name', 'text', 'amount', 'unit', 'button_label'],
        'faqs' => ['question', 'answer'],
    ];

    foreach ($grids as $handle => $keys) {
        foreach ($home->get($handle) as $row) {
            foreach ($keys as $key) {
                $response->assertSee($row[$key]);
            }
        }
    }

    foreach ($home->get('lab_topics') as $topic) {
        $response->assertSee($topic);
    }

    foreach ($home->get('delivery_tiers') as $tier) {
        foreach ($tier['items'] as $item) {
            $response->assertSee($item);
        }
    }

    $response->assertSee('href="'.$home->get('cta_secondary_url').'"', false)
        ->assertSee('href="'.$home->get('truss_button_url').'"', false);
});

test('changes saved in the control panel appear on the page', function () {
    $path = base_path('content/collections/pages/home.md');
    $original = file_get_contents($path);

    try {
        $home = Entry::find('home');
        $faqs = $home->get('faqs');
        $faqs[] = ['id' => 'hxfaqtest', 'question' => 'Do you build water tanks?', 'answer' => 'Yes, in steel and reinforced concrete.'];
        $registrations = $home->get('registrations');
        array_pop($registrations);

        $home->set('cta_heading', 'Ready when you are.')
            ->set('faqs', $faqs)
            ->set('registrations', $registrations)
            ->set('cta_secondary_label', null)
            ->saveQuietly();

        $html = $this->get('/')
            ->assertSee('Ready when you are.')
            ->assertSee('Do you build water tanks?')
            ->assertDontSee('Let’s build what comes next.')
            ->getContent();

        expect(substr_count($html, 'class="faq-item"'))->toBe(count($faqs))
            ->and(substr_count($html, 'class="trust-item'))->toBe(count($registrations))
            ->and($html)->not->toContain('class="button is-secondary">Call');
    } finally {
        file_put_contents($path, $original);
        Entry::find('home')?->fresh();
    }
});

test('the faq is an accessible accordion that works for any number of questions', function () {
    $home = Entry::find('home');
    $html = $this->get('/')->getContent();
    $count = count($home->get('faqs'));

    expect(substr_count($html, '<button type="button" class="faq-question"'))->toBe($count)
        ->and(substr_count($html, 'aria-expanded="false"'))->toBeGreaterThanOrEqual($count)
        ->and($html)->toContain('aria-controls="hx-faq-a1"')
        ->and($html)->toContain('id="hx-faq-a'.$count.'"')
        ->and($html)->toContain('data-hx-faq')
        ->and($html)->toContain('/hmxtech/js/hmxtech-faq.js')
        ->and(file_exists(public_path('hmxtech/js/hmxtech-faq.js')))->toBeTrue();
});
