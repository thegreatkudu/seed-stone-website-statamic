<?php

use Illuminate\Support\Facades\Route;

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
//     return view('gardering');
// });

// Route::get('/about-us', function () {
//     return view('about-us');
// });

// Route::get('/our-services', function () {
//     return view('grid-services');
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

// Route::get('/terms-and-conditions', function () {
//     return view('terms-and-conditions');
// });

Route::statamic('search', 'search');
