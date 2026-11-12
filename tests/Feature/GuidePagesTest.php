<?php

test('the instructions page explains how to update the site in the control panel', function () {
    $this->get('/instructions')
        ->assertSuccessful()
        ->assertSee('How to update this website.')
        ->assertSeeInOrder(['Signing in', 'Home page', 'Publications', 'News', 'Quote requests and sign-ups', 'Company details and search'])
        ->assertSee('Forms → Project Enquiry', false)
        ->assertSee('<meta name="robots" content="noindex', false);
});

test('the style guide shows the HMXTECH brand colours', function () {
    $response = $this->get('/style-guide')
        ->assertSuccessful()
        ->assertSee('The HMXTECH system.')
        ->assertSee('<meta name="robots" content="noindex', false);

    foreach (['#E21DD3', '#8A2BF2', '#2D3BF2', '#0E0C1D', '#F4F4F7'] as $colour) {
        $response->assertSee($colour);
    }
});

test('no template copy is left on the guide pages', function (string $uri) {
    $html = strip_tags($this->get($uri)->getContent());

    expect($html)->not->toContain('Carefront')
        ->not->toContain('patient')
        ->not->toContain('clinic')
        ->not->toContain('Lorem ipsum')
        ->not->toContain('Blue, Forest and Plum');
})->with(['/instructions', '/style-guide']);
