<?php

test('the portfolio page presents the HMXTECH company profile', function () {
    $this->get('/portfolio')
        ->assertSuccessful()
        ->assertSee('<title>Company portfolio: registered engineers and contractors in Mbeya | HMXTECH</title>', false)
        ->assertSee('Your building is our business.')
        ->assertSee('Design and construction under one roof.')
        ->assertSee('BRELA No. 478140')
        ->assertSee('Three rules we build by.')
        ->assertSee('Buildings, roads and the structures between.')
        ->assertSee('Have a project in mind? Talk to an engineer.');
});

test('no healthcare template copy or sample team is left on the portfolio page', function () {
    $html = strip_tags($this->get('/portfolio')->getContent());

    expect($html)->not->toContain('Carefront')
        ->not->toContain('clinic')
        ->not->toContain('patient')
        ->not->toContain('Oakland')
        ->not->toContain('Ana Ruiz')
        ->not->toContain('open roles');
});

test('the old about address redirects to the portfolio', function () {
    $this->get('/about')->assertRedirect('/portfolio')->assertStatus(301);
});
