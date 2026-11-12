<?php

use Statamic\Facades\Entry;

test('the features section renders right after the hero slider', function () {
    $html = $this->get('/')->assertSuccessful()->getContent();

    $hero = strpos($html, 'data-hx-hero');
    $features = strpos($html, 'class="section hx-features"');
    $platform = strpos($html, 'class="platform_panel"');

    expect($hero)->not->toBeFalse()
        ->and($features)->toBeGreaterThan($hero)
        ->and($platform)->toBeGreaterThan($features);
});

test('the features section shows the content from the home entry', function () {
    $home = Entry::find('home');
    $cards = $home->get('features_cards');

    $response = $this->get('/')
        ->assertSee($home->get('features_tag'))
        ->assertSee($home->get('features_heading'))
        ->assertSee($home->get('features_heading_muted'))
        ->assertSee('/hmxtech/css/hmxtech-features.css', false);

    $html = $response->getContent();

    expect(substr_count($html, 'class="feature hx-feature'))->toBe(count($cards));

    foreach ($cards as $index => $card) {
        $response->assertSee($card['title'])
            ->assertSee('<div class="hx-feature_num">'.str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT).'</div>', false);
    }
});

test('cards without an uploaded image fall back to the built-in previews', function () {
    $html = $this->get('/')->getContent();

    expect(substr_count($html, 'class="hx-mock" aria-hidden="true"'))->toBe(3)
        ->and($html)->not->toContain('class="hx-feature_image"');
});

test('the platform panel keeps its Webflow interaction hook', function () {
    $this->get('/')->assertSee('fc1a0d03-a5a7-6eb0-ce55-d1ec96b9495d&quot;],[]]]" class="platform_panel"', false);
});
