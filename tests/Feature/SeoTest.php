<?php

/**
 * Decode every JSON-LD block in a rendered page.
 *
 * @return array<int, array<string, mixed>>
 */
function jsonLdBlocks(string $html): array
{
    preg_match_all('#<script type="application/ld\+json">(.*?)</script>#s', $html, $matches);

    return array_map(fn (string $json) => json_decode($json, true, flags: JSON_THROW_ON_ERROR), $matches[1]);
}

test('key pages render SEO tags and valid structured data', function (string $uri, string $schemaType) {
    $html = $this->get($uri)->assertSuccessful()->getContent();

    expect($html)
        ->toContain('<title>')
        ->toContain('<meta name="description"')
        ->toContain('<link rel="canonical" href="'.config('app.url').$uri)
        ->toContain('<meta property="og:title"')
        ->toContain('index, follow')
        ->and(substr_count($html, '<h1'))->toBe(1);

    $types = collect(jsonLdBlocks($html))
        ->flatMap(fn (array $block) => $block['@graph'] ?? [$block])
        ->pluck('@type');

    expect($types)->toContain('Organization', 'WebSite', 'WebPage', $schemaType);
})->with([
    'home' => ['/', 'WebPage'],
    'product' => ['/products/cashewnut', 'Product'],
    'service' => ['/services/direct-sourcing', 'Service'],
    'post' => ['/posts/a-guide-to-exporting-crops-from-tanzania', 'BlogPosting'],
    'faq' => ['/faqs', 'FAQPage'],
]);

test('the 404 page is not indexed', function () {
    $this->get('/this-page-does-not-exist')
        ->assertNotFound()
        ->assertSee('noindex, nofollow', false);
});

test('the sitemap lists published indexable entries only', function () {
    $response = $this->get('/sitemap.xml')->assertSuccessful();

    expect($response->headers->get('Content-Type'))->toContain('application/xml')
        ->and($response->getContent())
        ->toContain(config('app.url').'/products/cashewnut')
        ->toContain(config('app.url').'/services/direct-sourcing')
        ->not->toContain('leoleo');
});

test('llms.txt summarises the company from the CMS', function () {
    $response = $this->get('/llms.txt')->assertSuccessful();

    expect($response->headers->get('Content-Type'))->toContain('text/plain')
        ->and($response->getContent())
        ->toStartWith('# Seedstone')
        ->toContain('## Products')
        ->toContain('[Cashewnut]('.config('app.url').'/products/cashewnut)')
        ->toContain('## Services')
        ->not->toContain('leoleo');
});
