<?php

test('the home page presents HMXTECH construction content', function () {
    $this->get('/')
        ->assertSuccessful()
        ->assertSee('<title>Engineering Consultancy and Construction Company in Tanzania | HMXTECH</title>', false)
        ->assertSee('Your building is')
        ->assertSee('One team for every stage, from the first survey to the final handover.')
        ->assertSee('Built for work that stands for decades.')
        ->assertSee('Every project, one living site record.')
        ->assertSee('Truss analysis, right in your browser.')
        ->assertSee('Tested in the lab, proven on site.')
        ->assertSee('Engineering that is researched, not guessed.')
        ->assertSee('Priced per project, delivered by registered engineers.')
        ->assertSee('Is HMXTECH a registered company?')
        ->assertSee('B5/1393/07/2021')
        ->assertSee('C6/2288/07/2021')
        ->assertSee('238L');
});

test('the layout uses the HMXTECH brand kit', function () {
    $this->get('/')
        ->assertSee('/hmxtech/brand/logo-color.svg', false)
        ->assertSee('/hmxtech/brand/logo-for-dark-bg.svg', false)
        ->assertSee('/hmxtech/brand/favicon.svg', false)
        ->assertSee('/hmxtech/brand/site.webmanifest', false)
        ->assertSee('© 2026 HMXTECH Company Limited')
        ->assertDontSee('carefront-icon.png', false);
});

test('no healthcare template copy is left on the home page', function () {
    $html = strip_tags($this->get('/')->getContent());

    expect($html)->not->toContain('Carefront')
        ->not->toContain('patient')
        ->not->toContain('Book a demo')
        ->not->toContain('HIPAA')
        ->not->toContain('EHR');
});
