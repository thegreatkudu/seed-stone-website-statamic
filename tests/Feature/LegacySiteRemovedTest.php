<?php

use Statamic\Facades\Collection;
use Statamic\Facades\Entry;
use Statamic\Facades\GlobalSet;
use Statamic\Facades\Nav;
use Statamic\Facades\Taxonomy;

test('only the HMXTECH collections, globals, menus and taxonomies remain', function () {
    expect(Collection::handles()->sort()->values()->all())->toBe(['pages', 'posts', 'publications'])
        ->and(GlobalSet::all()->map->handle()->sort()->values()->all())->toBe(['settings', 'site_footer', 'site_header'])
        ->and(Nav::all())->toBeEmpty()
        ->and(Taxonomy::all())->toBeEmpty()
        ->and(Entry::query()->where('collection', 'posts')->get()->map->blueprint()->map->handle()->unique()->sort()->values()->all())->toBe(['article', 'news_item']);
});

test('old addresses redirect to the closest HMXTECH page', function (string $from, string $to) {
    $this->get($from)->assertMovedPermanently()->assertRedirect($to);
})->with([
    ['/about-us', '/portfolio'],
    ['/our-partners', '/portfolio'],
    ['/contact-us', '/contact'],
    ['/faqs', '/how-we-work'],
    ['/privacy-policy', '/privacy'],
    ['/terms-and-conditions', '/terms'],
    ['/our-services', '/features'],
    ['/services/direct-sourcing', '/features'],
    ['/products', '/features'],
    ['/products/cashewnut', '/features'],
    ['/posts', '/news'],
    ['/posts/a-guide-to-exporting-crops-from-tanzania', '/news'],
    ['/categories/market-intelligence', '/news'],
]);

test('no page, feed or error page mentions the old agricultural site', function (string $uri, int $status) {
    $html = $this->get($uri)->assertStatus($status)->getContent();

    expect($html)->not->toContain('Seedstone')
        ->not->toContain('seedstone')
        ->not->toContain('seeds-tone')
        ->not->toContain('Cashewnut')
        ->not->toContain('Agricultural export');
})->with([
    ['/', 200],
    ['/features', 200],
    ['/news', 200],
    ['/news/why-the-ruvu-to-mlandizi-road-keeps-failing-in-the-rain', 200],
    ['/sitemap.xml', 200],
    ['/llms.txt', 200],
    ['/robots.txt', 200],
    ['/this-page-does-not-exist', 404],
]);

test('the 404 page uses the HMXTECH layout', function () {
    $this->get('/this-page-does-not-exist')
        ->assertNotFound()
        ->assertSee('This page is not on our drawings.')
        ->assertSee('/hmxtech/brand/logo-color.svg', false)
        ->assertSee('noindex, nofollow', false);
});

test('robots.txt points to the sitemap on this site', function () {
    $this->get('/robots.txt')
        ->assertSuccessful()
        ->assertHeader('Content-Type', 'text/plain; charset=UTF-8')
        ->assertSee('Sitemap: '.rtrim(config('app.url'), '/').'/sitemap.xml', false)
        ->assertSee('Disallow: /cp', false);
});
