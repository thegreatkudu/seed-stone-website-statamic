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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about-us', function () {
//     return view('about-us');
// });

// Route::get('/before-&-after', function () {
//     return view('before-and-after');
// });

// Route::get('/single-service', function () {
//     return view('single-service');
// });

// Route::get('/our-services', function () {
//     return view('services');
// });

// Route::get('/services/{slug}', function ($slug) {
//     return view('service', compact('slug'));
// });

// Route::get('/posts', function () {
//     return view('posts');
// });

// Route::get('/post/{slug}', function ($slug) {
//     return view('post', compact('slug'));
// });

// Route::get('/contact-us', function () {
//     return view('contact-us');
// });

// Route::get('/our-works', function () {
//     return view('our-works');
// });

// Route::get('/pricing', function () {
//     return view('pricing');
// });

// Route::statamic('search', 'search');

Route::redirect('/services', '/our-services', 301);
Route::redirect('/services/', '/our-services', 301);

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
    $entries = collect(['pages', 'products', 'services', 'posts'])
        ->flatMap(fn (string $collection) => $indexableEntries($collection));

    $urls = $entries->map(function ($entry) {
        $loc = config('app.url').$entry->url();
        $lastmod = $entry->lastModified()?->toAtomString();

        $priority = match ($entry->collection()->handle()) {
            'pages' => $entry->url() === '/' ? '1.0' : '0.8',
            'products', 'services' => '0.7',
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
 * Built live from Globals → Settings and the Products, Services, Pages and Posts
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

    $sections = [
        'Products (export crops)' => $indexableEntries('products'),
        'Services' => $indexableEntries('services'),
    ];

    foreach ($sections as $heading => $entries) {
        if ($entries->isEmpty()) {
            continue;
        }

        $lines[] = '';
        $lines[] = "## {$heading}";

        foreach ($entries as $entry) {
            $description = $summary($entry);
            $lines[] = "- [{$entry->get('title')}]({$url($entry)})".($description !== '' ? ": {$description}" : '');
        }
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

    $lines[] = '';
    $lines[] = '## Optional';
    $lines[] = '- Sitemap: '.rtrim(config('app.url'), '/').'/sitemap.xml';

    return Response::make(implode("\n", $lines)."\n", 200, ['Content-Type' => 'text/plain; charset=UTF-8']);
});
