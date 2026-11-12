<?php

use Statamic\Facades\Entry;

test('the home page renders the hero slider from the home entry', function () {
    $slides = Entry::find('home')->get('hero_slides');

    $response = $this->get('/')
        ->assertSuccessful()
        ->assertSee('data-hx-hero', false)
        ->assertSee('aria-roledescription="carousel"', false)
        ->assertSee('/hmxtech/css/hmxtech-hero.css', false)
        ->assertSee('/hmxtech/js/hmxtech-hero-slider.js', false);

    $html = $response->getContent();

    expect(substr_count($html, 'data-hx-slide>'))->toBe(count($slides))
        ->and(substr_count($html, 'role="tab"'))->toBe(count($slides))
        ->and(substr_count($html, '<h1'))->toBe(1);

    foreach ($slides as $index => $slide) {
        $response->assertSee($slide['heading'], false)
            ->assertSee('aria-label="'.($index + 1).' of '.count($slides).'"', false);
    }
});

test('only the first slide is marked active and selected on load', function () {
    $html = $this->get('/')->getContent();

    expect(substr_count($html, 'hx-hero_slide is-active'))->toBe(1)
        ->and(substr_count($html, 'aria-selected="true"'))->toBe(1)
        ->and($html)->toContain('id="hx-hero-tab-1"')
        ->and($html)->toMatch('/id="hx-hero-tab-1"\s+aria-controls="hx-hero-slide-1" aria-selected="true" tabindex="0"/');
});

test('slide images are served through glide at responsive sizes', function () {
    $html = $this->get('/')->getContent();

    preg_match_all('/<img src="(\/img\/asset\/[^"]+)"/', $html, $matches);

    expect($matches[1])->not->toBeEmpty()
        ->and($html)->toContain(' 960w, ')
        ->and($html)->toContain(' 2560w"')
        ->and($html)->toContain('fetchpriority="high"');
});
