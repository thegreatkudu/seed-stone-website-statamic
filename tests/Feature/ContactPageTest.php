<?php

test('the contact page offers HMXTECH contact details and a quote form', function () {
    $this->get('/contact')
        ->assertSuccessful()
        ->assertSee('<title>Contact HMXTECH: request a quote or talk to an engineer | HMXTECH</title>', false)
        ->assertSee('Talk to an engineer, not a queue.')
        ->assertSee('href="mailto:info@hmxtech.co.tz"', false)
        ->assertSee('href="tel:+255758526792"', false)
        ->assertSee('href="tel:+255767307685"', false)
        ->assertSee('P.O. Box 1897, Mbeya, Tanzania')
        ->assertSee('Request a quote')
        ->assertSee('name="project_type"', false)
        ->assertSee('Where is your office?');
});

test('no healthcare template copy is left on the contact page', function () {
    $html = strip_tags($this->get('/contact')->getContent());

    expect($html)->not->toContain('Carefront')
        ->not->toContain('clinic')
        ->not->toContain('patient')
        ->not->toContain('walkthrough')
        ->not->toContain('EHR');
});
