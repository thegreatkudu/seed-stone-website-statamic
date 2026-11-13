<?php

use Statamic\Facades\Entry;

test('the publications page lists every paper from the collection', function () {
    $papers = Entry::query()->where('collection', 'publications')->get();

    $response = $this->get('/publications')
        ->assertSuccessful()
        ->assertSee('<title>Engineering publications on roads, materials and procurement | HMXTECH</title>', false)
        ->assertSee('Research from the field and the lab.');

    expect($papers)->toHaveCount(22);

    $papers->each(fn ($paper) => $response->assertSee($paper->get('title')));

    $papers->filter(fn ($paper) => $paper->get('pdf'))->each(fn ($paper) => $response
        ->assertSee('href="'.$paper->augmentedValue('pdf')->value()->url().'"', false));
});

test('paper PDFs are stored on this website, not on another server', function () {
    $papers = Entry::query()->where('collection', 'publications')->get();
    $withFile = $papers->filter(fn ($paper) => $paper->get('pdf'));

    expect($withFile)->toHaveCount(21)
        ->and($papers->filter(fn ($paper) => str_contains((string) $paper->get('pdf_url'), 'software.hmxtech.co.tz')))->toBeEmpty();

    $withFile->each(fn ($paper) => expect(file_exists(public_path('assets/'.$paper->get('pdf'))))->toBeTrue());

    $this->get('/publications')
        ->assertDontSee('software.hmxtech.co.tz/static')
        ->assertSee('PDF coming soon');
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
