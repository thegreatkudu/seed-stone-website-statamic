<?php

use Statamic\Facades\Entry;

/**
 * The How we work page text, route cards and comparison table come from its
 * entry (How We Work Page blueprint), so editors can change them in the CP.
 */
function howWeWorkEntry(): Statamic\Contracts\Entries\Entry
{
    return Entry::query()->where('collection', 'pages')->where('slug', 'how-we-work')->first();
}

test('the how we work entry uses its own blueprint and passes validation', function () {
    $page = howWeWorkEntry();

    expect($page->blueprint()->handle())->toBe('how_we_work');

    $fields = $page->blueprint()->fields()->addValues($page->data()->all())->preProcess();

    expect(fn () => $fields->validator()->validate())->not->toThrow(Exception::class);
});

test('every section renders its text from the entry', function () {
    $page = howWeWorkEntry();
    $response = $this->get('/how-we-work')->assertSuccessful();

    foreach ([
        'intro_tag', 'intro_heading', 'intro_text', 'routes_note', 'routes_note_link_label',
        'compare_tag', 'compare_heading', 'compare_text', 'compare_first_column',
        'faq_tag', 'faq_heading', 'faq_text', 'faq_link_label',
        'cta_heading', 'cta_text', 'cta_primary_label', 'cta_secondary_label',
    ] as $handle) {
        expect($page->get($handle))->not->toBeEmpty("{$handle} is empty");
        $response->assertSee($page->get($handle));
    }

    expect($page->get('routes'))->toHaveCount(3);

    foreach ($page->get('routes') as $route) {
        $response->assertSee($route['name'])->assertSee($route['text'])->assertSee($route['unit'])
            ->assertSee('/ '.$route['compare_unit'])->assertSee($route['button_label']);

        foreach ($route['items'] as $item) {
            $response->assertSee($item);
        }
    }

    foreach ($page->get('faqs') as $faq) {
        $response->assertSee($faq['question'])->assertSee($faq['answer']);
    }
});

test('the comparison table shows a tick, a dash or text for every cell', function () {
    $page = howWeWorkEntry();
    $html = $this->get('/how-we-work')->getContent();

    $rows = collect($page->get('compare_groups'))->flatMap(fn (array $group) => $group['rows']);
    $cells = $rows->flatMap(fn (array $row) => [$row['consultancy'], $row['design_build'], $row['construction']]);

    expect(substr_count($html, 'class="compare_group"'))->toBe(count($page->get('compare_groups')))
        ->and(substr_count($html, 'aria-label="Included" class="compare_check"'))->toBe($cells->filter(fn ($cell) => $cell === 'yes')->count())
        ->and(substr_count($html, 'aria-label="Not included" class="compare_dash"'))->toBe($cells->filter(fn ($cell) => $cell === 'no' || blank($cell))->count());

    foreach ($rows as $row) {
        expect($html)->toContain('<div class="compare_label">'.e($row['label']).'</div>');
    }

    foreach ($cells->reject(fn ($cell) => in_array($cell, ['yes', 'no', null, ''], true)) as $text) {
        expect($html)->toContain('<span class="compare_text">'.e($text).'</span>');
    }
});

test('changes saved in the control panel appear on the page', function () {
    $path = base_path('content/collections/pages/how-we-work.md');
    $original = file_get_contents($path);

    try {
        $page = howWeWorkEntry();
        $groups = $page->get('compare_groups');
        $groups[0]['rows'][] = ['id' => 'hxcmptest', 'label' => 'Environmental impact assessment', 'consultancy' => 'yes', 'design_build' => 'On request', 'construction' => 'no'];

        $page->set('intro_heading', 'Pick the route that suits you.')
            ->set('compare_groups', $groups)
            ->saveQuietly();

        $this->get('/how-we-work')
            ->assertSee('Pick the route that suits you.')
            ->assertSee('Environmental impact assessment')
            ->assertSee('<span class="compare_text">On request</span>', false)
            ->assertDontSee('Three ways to work with us.');
    } finally {
        file_put_contents($path, $original);
    }
});

test('the faq questions are accessible buttons', function () {
    $html = $this->get('/how-we-work')->getContent();

    expect(substr_count($html, '<button type="button" class="faq-question"'))->toBe(count(howWeWorkEntry()->get('faqs')));
});
