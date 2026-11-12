<?php

test('pages show a back to top button instead of the Webflow badge', function (string $uri) {
    $this->get($uri)
        ->assertSuccessful()
        ->assertSee('<body id="top">', false)
        ->assertSee('data-hx-top aria-label="Back to top"', false)
        ->assertSee('/hmxtech/js/hmxtech-back-to-top.js', false)
        ->assertDontSee('data-wf-domain', false)
        ->assertDontSee('webflow.io', false);
})->with(['/', '/portfolio', '/publications', '/contact']);

test('the auth pages no longer trigger the Webflow badge', function () {
    $this->get('/sign-in')
        ->assertSuccessful()
        ->assertDontSee('data-wf-domain', false);
});
