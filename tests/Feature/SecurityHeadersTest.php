<?php

use App\Providers\AppServiceProvider;
use Illuminate\Support\Facades\URL;

test('pages are sent with security headers', function (string $uri) {
    $this->get($uri)
        ->assertHeader('X-Content-Type-Options', 'nosniff')
        ->assertHeader('X-Frame-Options', 'SAMEORIGIN')
        ->assertHeader('Referrer-Policy', 'strict-origin-when-cross-origin')
        ->assertHeader('Cross-Origin-Opener-Policy', 'same-origin')
        ->assertHeaderMissing('Strict-Transport-Security');
})->with(['/', '/news', '/sitemap.xml', '/this-page-does-not-exist']);

test('HSTS is only sent over HTTPS', function () {
    $this->get('https://localhost/')
        ->assertHeader('Strict-Transport-Security', 'max-age=31536000; includeSubDomains');
});

test('production generates https links', function () {
    app()->detectEnvironment(fn () => 'production');
    (new AppServiceProvider(app()))->boot();

    expect(URL::to('/news'))->toStartWith('https://');
});
