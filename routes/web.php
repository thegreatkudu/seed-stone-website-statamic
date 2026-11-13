<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Statamic\Facades\Entry;
use Statamic\Facades\GlobalSet;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
 * Old Carefront template addresses.
 */
Route::redirect('/about', '/portfolio', 301);
Route::redirect('/research', '/publications', 301);
Route::redirect('/changelog', '/news', 301);
Route::redirect('/pricing', '/how-we-work', 301);
Route::redirect('/platform', '/features', 301);
Route::redirect('/posts/harbor-family-no-shows', '/news/why-the-ruvu-to-mlandizi-road-keeps-failing-in-the-rain', 301);

/*
 * Addresses from the site this project replaced, kept so old links and
 * search results land on the closest HMXTECH page.
 */
Route::redirect('/about-us', '/portfolio', 301);
Route::redirect('/our-partners', '/portfolio', 301);
Route::redirect('/contact-us', '/contact', 301);
Route::redirect('/faqs', '/how-we-work', 301);
Route::redirect('/privacy-policy', '/privacy', 301);
Route::redirect('/terms-and-conditions', '/terms', 301);
Route::redirect('/our-services', '/features', 301);
Route::redirect('/services', '/features', 301);
Route::redirect('/services/{slug}', '/features', 301)->where('slug', '.*');
Route::redirect('/products', '/features', 301);
Route::redirect('/products/{slug}', '/features', 301)->where('slug', '.*');
Route::redirect('/posts', '/news', 301);
Route::redirect('/categories/{slug?}', '/news', 301)->where('slug', '.*');
Route::redirect('/tags/{slug?}', '/news', 301)->where('slug', '.*');

/*
 * Articles moved from /posts/{slug} to /news/{slug}; slugs that no longer
 * exist go to the News page instead of a 404.
 */
Route::get('/posts/{slug}', function (string $slug) {
    $exists = Entry::query()->where('collection', 'posts')->where('slug', $slug)->count() > 0;

    return redirect($exists ? '/news/'.$slug : '/news', 301);
})->where('slug', '[^/]+');

Route::get('/robots.txt', function () {
    $lines = [
        '# '.config('app.name').' — '.config('app.url'),
        '# Search engines and AI assistants are welcome to read the public site.',
        '# A plain-text company summary for AI assistants is at /llms.txt',
        '',
        'User-agent: *',
        'Allow: /',
        'Disallow: /cp',
        'Disallow: /!/',
        'Disallow: /_debugbar',
        '',
        'Sitemap: '.rtrim(config('app.url'), '/').'/sitemap.xml',
    ];

    return Response::make(implode("\n", $lines)."\n", 200, ['Content-Type' => 'text/plain; charset=UTF-8']);
});

/**
 * Published, indexable entries from the public collections, in sitemap order.
 *
 * @return Collection<int, Statamic\Contracts\Entries\Entry>
 */
$indexableEntries = function (string $collection) {
    return Entry::query()
        ->where('collection', $collection)
        ->where('published', true)
        ->get()
        ->reject(fn ($entry) => (bool) $entry->get('noindex') || $entry->url() === null)
        ->values();
};

Route::get('/sitemap.xml', function () use ($indexableEntries) {
    $entries = collect(['pages', 'posts'])
        ->flatMap(fn (string $collection) => $indexableEntries($collection));

    $urls = $entries->map(function ($entry) {
        $loc = config('app.url').$entry->url();
        $lastmod = $entry->lastModified()?->toAtomString();

        $priority = match ($entry->collection()->handle()) {
            'pages' => $entry->url() === '/' ? '1.0' : '0.8',
            default => '0.6',
        };

        return '<url><loc>'.e($loc).'</loc><lastmod>'.$lastmod.'</lastmod><priority>'.$priority.'</priority></url>';
    })->implode('');

    $xml = '<?xml version="1.0" encoding="UTF-8"?>'
        .'<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'
        .$urls
        .'</urlset>';

    return Response::make($xml, 200, ['Content-Type' => 'application/xml']);
});

/*
 * llms.txt — plain-text summary for AI assistants (ChatGPT, Claude, Perplexity…).
 * Built live from Globals → Settings and the Pages, Posts and Publications
 * collections, so it never drifts from what editors publish in the CP.
 */
Route::get('/llms.txt', function () use ($indexableEntries) {
    $settings = GlobalSet::findByHandle('settings')?->inDefaultSite();
    $setting = fn (string $key, mixed $default = null) => $settings?->get($key) ?? $default;
    $url = fn ($entry) => rtrim(config('app.url'), '/').$entry->url();
    $summary = fn ($entry) => trim(preg_replace('/\s+/', ' ', strip_tags((string) ($entry->get('seo_description') ?? $entry->get('excerpt') ?? ''))));

    $lines = [];
    $lines[] = '# '.$setting('site_name', config('app.name'));
    $lines[] = '';
    $lines[] = '> '.$setting('company_description', $setting('meta_description', ''));
    $lines[] = '';
    $lines[] = '## Company Facts';

    $facts = [
        'Legal name' => $setting('legal_name'),
        'Website' => rtrim(config('app.url'), '/').'/',
        'Location' => collect([$setting('address_street'), $setting('address_po_box') ? 'P.O. Box '.$setting('address_po_box') : null, $setting('address_city'), $setting('address_country_code')])->filter()->implode(', '),
        'Email' => $setting('company_email'),
        'Phone' => $setting('company_phone'),
        'Contact' => collect([$setting('contact_person'), $setting('contact_person_role')])->filter()->implode(' — '),
        'Languages' => collect($setting('languages', []))->implode(', '),
    ];

    foreach (array_filter($facts) as $label => $value) {
        $lines[] = "- {$label}: {$value}";
    }

    foreach ((array) $setting('social_profiles', []) as $profile) {
        $lines[] = "- Profile: {$profile}";
    }

    if ($about = trim((string) $setting('llms_about', ''))) {
        $lines[] = '';
        $lines[] = $about;
    }

    $lines[] = '';
    $lines[] = '## Key Pages';

    foreach ($indexableEntries('pages') as $page) {
        $lines[] = '- ['.($page->get('nav_title') ?? $page->get('title'))."]({$url($page)})";
    }

    $posts = $indexableEntries('posts')->sortByDesc(fn ($entry) => $entry->date())->take(20);

    if ($posts->isNotEmpty()) {
        $lines[] = '';
        $lines[] = '## Latest Articles';

        foreach ($posts as $post) {
            $lines[] = "- [{$post->get('title')}]({$url($post)})";
        }
    }

    $publications = Entry::query()
        ->where('collection', 'publications')
        ->where('published', true)
        ->get()
        ->filter(fn ($entry) => filled($entry->get('pdf_url')));

    if ($publications->isNotEmpty()) {
        $lines[] = '';
        $lines[] = '## Publications';

        foreach ($publications as $publication) {
            $lines[] = "- [{$publication->get('title')}]({$publication->get('pdf_url')})";
        }
    }

    $lines[] = '';
    $lines[] = '## Optional';
    $lines[] = '- Sitemap: '.rtrim(config('app.url'), '/').'/sitemap.xml';

    return Response::make(implode("\n", $lines)."\n", 200, ['Content-Type' => 'text/plain; charset=UTF-8']);
});
