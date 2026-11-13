<?php

test('the services page lives at /features', function () {
    $this->get('/features')->assertSuccessful();
    $this->get('/platform')->assertMovedPermanently()->assertRedirect('/features');
});

test('articles live under /news', function () {
    $this->get('/news/why-the-ruvu-to-mlandizi-road-keeps-failing-in-the-rain')->assertSuccessful();
    $this->get('/posts/why-the-ruvu-to-mlandizi-road-keeps-failing-in-the-rain')
        ->assertMovedPermanently()
        ->assertRedirect('/news/why-the-ruvu-to-mlandizi-road-keeps-failing-in-the-rain');
});

test('the shared navigation no longer links to template addresses', function () {
    $html = $this->get('/')->getContent();

    expect($html)->toContain('href="/features"')
        ->not->toContain('href="/platform')
        ->not->toContain('href="/posts/');
});
