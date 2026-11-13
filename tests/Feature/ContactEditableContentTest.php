<?php

use Statamic\Facades\Entry;

/**
 * The Contact page text comes from its entry (Contact Page blueprint); the
 * quote form fields stay fixed so submissions keep the same structure.
 */
function contactEntry(): Statamic\Contracts\Entries\Entry
{
    return Entry::query()->where('collection', 'pages')->where('slug', 'contact')->first();
}

test('the contact entry uses its own blueprint and passes validation', function () {
    $contact = contactEntry();

    expect($contact->blueprint()->handle())->toBe('contact');

    $fields = $contact->blueprint()->fields()->addValues($contact->data()->all())->preProcess();

    expect(fn () => $fields->validator()->validate())->not->toThrow(Exception::class);
});

test('every block renders its text from the contact entry', function () {
    $contact = contactEntry();
    $response = $this->get('/contact')->assertSuccessful();

    foreach ([
        'intro_tag', 'intro_heading', 'intro_text', 'office_title', 'office_text',
        'form_title', 'form_success', 'form_error', 'form_note',
        'faq_tag', 'faq_heading', 'faq_text', 'faq_link_label',
    ] as $handle) {
        expect($contact->get($handle))->not->toBeEmpty("{$handle} is empty");
        $response->assertSee($contact->get($handle));
    }

    foreach ($contact->get('channels') as $channel) {
        $response->assertSee($channel['label'])
            ->assertSee($channel['value'])
            ->assertSee('href="'.$channel['link'].'"', false)
            ->assertSee($channel['note']);
    }

    foreach ($contact->get('faqs') as $faq) {
        $response->assertSee($faq['question'])->assertSee($faq['answer']);
    }
});

test('changes saved in the control panel appear on the contact page', function () {
    $path = base_path('content/collections/pages/contact.md');
    $original = file_get_contents($path);

    try {
        $contact = contactEntry();
        $channels = $contact->get('channels');
        $channels[] = ['id' => 'hxchantest', 'label' => 'WhatsApp', 'value' => '+255 700 111 222', 'link' => 'https://wa.me/255700111222', 'note' => 'Messages only'];
        $faqs = $contact->get('faqs');
        array_shift($faqs);

        $contact->set('intro_heading', 'Tell us about your site.')
            ->set('channels', $channels)
            ->set('faqs', $faqs)
            ->set('form_note', null)
            ->saveQuietly();

        $html = $this->get('/contact')
            ->assertSee('Tell us about your site.')
            ->assertSee('href="https://wa.me/255700111222"', false)
            ->assertDontSee('Where is your office?')
            ->assertDontSee('class="form-card_note"', false)
            ->getContent();

        expect(substr_count($html, 'class="channel"'))->toBe(count($channels))
            ->and(substr_count($html, 'class="faq-item"'))->toBe(count($faqs));
    } finally {
        file_put_contents($path, $original);
    }
});

test('the faq on contact and how we work opens with the shared accordion script', function (string $uri) {
    $html = $this->get($uri)->assertSuccessful()->getContent();

    expect($html)->toContain('data-hx-faq')
        ->and($html)->toContain('/hmxtech/js/hmxtech-faq.js');
})->with(['/contact', '/how-we-work']);

test('the contact faq questions are accessible buttons', function () {
    $html = $this->get('/contact')->getContent();
    $count = count(contactEntry()->get('faqs'));

    expect(substr_count($html, '<button type="button" class="faq-question"'))->toBe($count)
        ->and($html)->toContain('aria-controls="hx-faq-a1"');
});
