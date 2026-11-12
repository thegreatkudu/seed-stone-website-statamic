<?php

test('the platform page presents the HMXTECH services', function () {
    $this->get('/platform')
        ->assertSuccessful()
        ->assertSee('<title>Engineering consultancy, design and construction services | HMXTECH</title>', false)
        ->assertSee('Five services. One registered team.')
        ->assertSee('From the first site visit to the final certificate.')
        ->assertSee('Drawings checked before a bar is cut.')
        ->assertSee('One site diary, from site to office to client.')
        ->assertSee('Roads and structures, measured and certified.')
        ->assertSee('Materials proven in the lab before they go into the work.')
        ->assertSee('Every project, one living record.')
        ->assertSee('Bring your next project to one team.')
        ->assertSee('B5/1393/07/2021')
        ->assertSee('C6/2288/07/2021')
        ->assertSee('238L');
});

test('no healthcare template copy is left on the platform page', function () {
    $html = strip_tags($this->get('/platform')->getContent());

    expect($html)->not->toContain('Carefront')
        ->not->toContain('patient')
        ->not->toContain('Book a demo')
        ->not->toContain('EHR')
        ->not->toContain('Ana Silva');
});

test('the navigation mirrors the HMXTECH site menu', function () {
    $this->get('/platform')
        ->assertSeeInOrder(['>Features</a>', '>Projects</a>', '>Portfolio</a>', '>Publications</a>', '>News</a>', 'Truss Analyzer'], false)
        ->assertSee('href="https://hmxtech.co.tz/truss/app.html"', false)
        ->assertSee('href="https://hmxtech.co.tz/truss/README.txt"', false)
        ->assertSee('href="http://software.hmxtech.co.tz/signup"', false)
        ->assertDontSee('href="/sign-in"', false);
});

test('the home page has the projects anchor used by the navigation', function () {
    $this->get('/')->assertSee('<section class="section" id="projects">', false);
});
