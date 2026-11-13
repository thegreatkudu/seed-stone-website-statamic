<?php

dataset('webflow pages', ['/', '/features', '/portfolio', '/how-we-work', '/publications', '/news', '/contact', '/privacy', '/sign-in']);

test('every page loads the fade-and-reveal engine after its libraries', function (string $uri) {
    $html = $this->get($uri)->assertSuccessful()->getContent();

    $positions = collect([
        '/hmxtech/gsap/3.15.0/gsap.min.js',
        '/hmxtech/gsap/3.15.0/ScrollTrigger.min.js',
        '/hmxtech/gsap/3.15.0/SplitText.min.js',
        '/hmxtech/lenis/1.1.14/lenis.min.js',
        '/hmxtech/js/hmxtech-motion.js',
    ])->map(fn (string $src) => strpos($html, $src));

    expect($positions->every(fn ($position) => $position !== false))->toBeTrue()
        ->and($positions->values()->all())->toBe($positions->sort()->values()->all());

    expect($html)->toContain('/hmxtech/css/hmxtech-motion.css')
        ->toContain("matchMedia('(prefers-reduced-motion: reduce)')")
        ->toContain("r.classList.add('hx-motion-ready')");
})->with('webflow pages');

test('the self-hosted motion files exist', function (string $path) {
    expect(public_path($path))->toBeFile();
})->with([
    'hmxtech/gsap/3.15.0/SplitText.min.js',
    'hmxtech/lenis/1.1.14/lenis.min.js',
    'hmxtech/js/hmxtech-motion.js',
    'hmxtech/css/hmxtech-motion.css',
]);
