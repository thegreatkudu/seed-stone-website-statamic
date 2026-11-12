<?php

use Statamic\Facades\Entry;

test('the news page lists every item from the collection in order', function () {
    $titles = Entry::query()->where('collection', 'news')->get()
        ->sortBy(fn ($item) => $item->order())
        ->map(fn ($item) => $item->get('title'))
        ->values()
        ->all();

    expect($titles)->toHaveCount(7)
        ->and($titles[0])->toBe('Truss Analyzer, free in your browser and on Windows');

    $this->get('/news')
        ->assertSuccessful()
        ->assertSee('<title>News: engineering events, training and company updates | HMXTECH</title>', false)
        ->assertSee('What is new at HMXTECH.')
        ->assertSeeInOrder($titles)
        ->assertSee('href="https://software.hmxtech.co.tz/static/uploads/WORLD-ENGINEERING-DAY-ON-04-MARCH-2024.jpg"', false)
        ->assertSee('4 Mar 2024');
});

test('no healthcare template copy is left on the news page', function () {
    $html = strip_tags($this->get('/news')->getContent());

    expect($html)->not->toContain('Carefront')
        ->not->toContain('patient')
        ->not->toContain('EHR')
        ->not->toContain('Waitlist');
});

test('the old changelog address redirects to news', function () {
    $this->get('/changelog')->assertRedirect('/news')->assertStatus(301);
});
