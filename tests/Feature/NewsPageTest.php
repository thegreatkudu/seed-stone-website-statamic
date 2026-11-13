<?php

use Statamic\Facades\Entry;

test('the news page lists every entry of the News collection, newest first', function () {
    $titles = Entry::query()->where('collection', 'posts')->get()
        ->sortByDesc(fn ($item) => $item->date())
        ->map(fn ($item) => $item->get('title'))
        ->values()
        ->all();

    expect($titles)->toHaveCount(8);

    $this->get('/news')
        ->assertSuccessful()
        ->assertSee('<title>News: engineering events, training and company updates | HMXTECH</title>', false)
        ->assertSee('What is new at HMXTECH.')
        ->assertSeeInOrder($titles)
        ->assertSee('4 Mar 2024');
});

test('every news card opens its own page on this site', function () {
    $html = $this->get('/news')
        ->assertSee('class="latest-head"', false)
        ->assertSee('class="hx-news-cover is-event"', false)
        ->assertDontSee('class="releases"', false)
        ->getContent();

    preg_match_all('/<a href="([^"]+)" class="post-card/', $html, $links);

    expect($links[1])->toHaveCount(8)
        ->and(collect($links[1])->every(fn ($href) => str_starts_with($href, '/news/')))->toBeTrue()
        ->and($html)->not->toContain('software.hmxtech.co.tz/static');
});

test('the news page ends with the newsletter panel', function () {
    $this->get('/news')
        ->assertSee('One short email a month.')
        ->assertSee('id="newsletter-news"', false)
        ->assertSee('name="source" value="news"', false);
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
