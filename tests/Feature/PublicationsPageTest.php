<?php

use Statamic\Facades\Entry;

test('the publications page lists every paper from the collection', function () {
    $papers = Entry::query()->where('collection', 'publications')->get();

    $response = $this->get('/publications')
        ->assertSuccessful()
        ->assertSee('<title>Engineering publications on roads, materials and procurement | HMXTECH</title>', false)
        ->assertSee('Research from the field and the lab.');

    expect($papers)->toHaveCount(22);

    $papers->each(fn ($paper) => $response
        ->assertSee($paper->get('title'))
        ->assertSee('href="'.$paper->get('pdf_url').'"', false));
});

test('the featured paper is shown once in the large feature', function () {
    $html = $this->get('/publications')->getContent();

    expect(substr_count($html, 'class="post-feature_link">Effects of Waterlogging on the Performance of Ruvu to Mlandizi Road Pavement'))->toBe(1)
        ->and(substr_count($html, 'class="post-card_title">Effects of Waterlogging'))->toBe(0)
        ->and($html)->toContain('/assets/publications/featured-waterlogging.webp');
});

test('no healthcare template copy is left on the publications page', function () {
    $html = strip_tags($this->get('/publications')->getContent());

    expect($html)->not->toContain('Carefront')
        ->not->toContain('clinic')
        ->not->toContain('patient')
        ->not->toContain('front desk');
});

test('the old research address redirects to publications', function () {
    $this->get('/research')->assertRedirect('/publications')->assertStatus(301);
});
