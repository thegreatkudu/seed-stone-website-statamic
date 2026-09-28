<?php

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Statamic\Facades\Entry;

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

Route::get('/sitemap.xml', function () {
    $leoleoSlugs = [
        'empowering-women-agriculture-womens-day-leoleo-guliosmart',
        'harvest-profit-leoleo-guliosmart-tanzania-market-crisis',
        'how-data-and-technology-are-transforming-agriculture-in-tanzania',
        'leoleo-app-launches-iringa-digital-agriculture',
        'leoleo-app-launches-iringa-digital-agriculture-1',
        'leoleo-app-launches-iringa-digital-agriculture-2',
        'how-knowledge-sharing-innovation-leoleo-guliosmart-ifakara-innovation-hub',
        'leoleo-guliosmart-wins-recognition-ifakara-innovation-hub',
        'how-winning-tigo-pesa-challenge-accelerated-leoleo-guliosmart',
        'leoleo-guliosmart-smart-waste-solutions-durp-hackathon-dar-es-salaam',
        'tanzania-local-vendors-market-data-increase-profits',
        'empowering-local-market-vendors-tanzania-digital-innovation',
    ];

    $pages = Entry::query()->where('collection', 'pages')->where('published', true)->get();
    $products = Entry::query()->where('collection', 'products')->where('published', true)->get();
    $services = Entry::query()->where('collection', 'services')->where('published', true)->get();
    $posts = Entry::query()->where('collection', 'posts')->where('published', true)->whereNotIn('slug', $leoleoSlugs)->get();

    $urls = collect($pages)->merge($products)->merge($services)->merge($posts)->map(function ($entry) {
        $loc = config('app.url').$entry->url();
        $lastmod = $entry->lastModified()?->toAtomString();

        $priority = match ($entry->collection()->handle()) {
            'pages' => $entry->slug() === 'home' ? '1.0' : '0.8',
            'products' => '0.7',
            'services' => '0.7',
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
