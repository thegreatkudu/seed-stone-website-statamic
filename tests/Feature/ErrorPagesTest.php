<?php

use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Testing\TestResponse;
use Symfony\Component\HttpKernel\Exception\HttpException;

beforeEach(function () {
    config(['app.debug' => false]);
});

/**
 * Render an exception the way Laravel does for a real visitor.
 */
function renderError(Throwable $exception): TestResponse
{
    $request = Request::create('/some-page', 'GET');
    app()->instance('request', $request);

    return TestResponse::fromBaseResponse(app(ExceptionHandler::class)->render($request, $exception));
}

test('each error code shows its own branded page', function (int $status, string $heading) {
    renderError(new HttpException($status))
        ->assertStatus($status)
        ->assertSee('Error '.$status)
        ->assertSee($heading)
        ->assertSee('class="utility"', false)
        ->assertSee('/hmxtech/css/hmxtech-brand.css', false)
        ->assertSee('<meta name="robots" content="noindex, nofollow">', false)
        ->assertSee('info@hmxtech.co.tz')
        ->assertDontSee('Carefront');
})->with([
    'unauthorised' => [401, 'Please sign in to see this page.'],
    'forbidden' => [403, 'This area is off limits.'],
    'page expired' => [419, 'This page has expired.'],
    'too many requests' => [429, 'Too many requests at once.'],
    'server error' => [500, 'Something went wrong on our side.'],
    'maintenance' => [503, 'We are improving the site.'],
]);

test('codes without their own page fall back to the 4xx and 5xx pages', function (int $status, string $heading) {
    renderError(new HttpException($status))
        ->assertStatus($status)
        ->assertSee('Error '.$status)
        ->assertSee($heading);
})->with([
    'method not allowed' => [405, 'This request could not be completed.'],
    'gone' => [410, 'This request could not be completed.'],
    'bad gateway' => [502, 'Something went wrong on our side.'],
]);

test('a real server error renders the branded page without touching Statamic', function () {
    renderError(new RuntimeException('Boom'))
        ->assertStatus(500)
        ->assertSee('Something went wrong on our side.')
        ->assertDontSee('Boom');
});

test('the 404 uses the same utility layout inside the full site', function () {
    $this->get('/this-page-does-not-exist')
        ->assertNotFound()
        ->assertSee('class="utility"', false)
        ->assertSee('This page is not on our drawings.')
        ->assertSee('class="post-list hx-404_links"', false)
        ->assertSee('class="nav_menu"', false);
});
