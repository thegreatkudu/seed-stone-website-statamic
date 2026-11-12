<?php

test('the legal pages describe HMXTECH', function (string $uri, string $heading, array $phrases) {
    $response = $this->get($uri)
        ->assertSuccessful()
        ->assertSee($heading);

    foreach ($phrases as $phrase) {
        $response->assertSee($phrase);
    }
})->with([
    'privacy' => ['/privacy', 'Privacy policy.', ['BRELA No. 478140', 'Personal Data Protection Act, 2022', 'hmxtech-session', 'XSRF-TOKEN']],
    'terms' => ['/terms', 'Terms of use.', ['United Republic of Tanzania', 'Truss Analyzer is a free tool', 'A quote is valid only when HMXTECH issues it in writing.']],
    'licenses' => ['/licenses', 'Licenses and credits.', ['Brygada 1918', 'Schibsted Grotesk', 'HMXTECH logo and icons', 'Eng. Prof. Duwa Hamisi Chengula']],
]);

test('the privacy policy names exactly the cookies the site sets', function () {
    $cookies = collect($this->get('/contact')->headers->getCookies())
        ->map(fn ($cookie) => $cookie->getName())
        ->reject(fn ($name) => str_starts_with($name, 'PHPDEBUGBAR'))
        ->values();

    $policy = $this->get('/privacy')->getContent();

    $cookies->each(fn ($name) => expect($policy)->toContain($name));
});

test('no healthcare template copy is left on the legal pages', function (string $uri) {
    $html = strip_tags($this->get($uri)->getContent());

    expect($html)->not->toContain('Carefront')
        ->not->toContain('clinic')
        ->not->toContain('patient')
        ->not->toContain('HIPAA')
        ->not->toContain('sample copy');
})->with(['/privacy', '/terms', '/licenses']);
