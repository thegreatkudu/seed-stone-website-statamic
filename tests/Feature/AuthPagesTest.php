<?php

test('the auth pages are branded for the HMXTECH client portal', function (string $uri, string $heading, string $button) {
    $this->get($uri)
        ->assertSuccessful()
        ->assertSee('/hmxtech/brand/logo-color.svg', false)
        ->assertSee($heading)
        ->assertSee($button)
        ->assertSee('The client portal opens soon.')
        ->assertSee('/hmxtech/js/hmxtech-auth.js', false)
        ->assertSee('<meta name="robots" content="noindex', false);
})->with([
    'sign in' => ['/sign-in', 'Welcome back to your project.', 'Sign in'],
    'sign up' => ['/sign-up', 'Follow your project from anywhere.', 'Create account'],
]);

test('the auth forms never send passwords in the address bar', function (string $uri) {
    $html = $this->get($uri)->getContent();

    expect($html)->toContain('method="post"')
        ->not->toContain('method="get"');
})->with(['/sign-in', '/sign-up']);

test('no healthcare template copy is left on the auth pages', function (string $uri) {
    $html = strip_tags($this->get($uri)->getContent());

    expect($html)->not->toContain('Carefront')
        ->not->toContain('clinic')
        ->not->toContain('patient')
        ->not->toContain('HIPAA')
        ->not->toContain('free trial');
})->with(['/sign-in', '/sign-up']);
