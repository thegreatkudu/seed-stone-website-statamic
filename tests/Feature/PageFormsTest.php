<?php

test('page forms post to their Statamic form handlers', function (string $uri, string $form) {
    $this->get($uri)
        ->assertSuccessful()
        ->assertSee('action="'.config('app.url').'/!/forms/'.$form.'"', false)
        ->assertSee('name="_token"', false)
        ->assertSee('name="website"', false)
        ->assertDontSee('wp-json/metform', false);
})->with([
    'contact page' => ['/contact', 'project_enquiry'],
    'news page' => ['/news', 'newsletter'],
    'article footer' => ['/news/why-the-ruvu-to-mlandizi-road-keeps-failing-in-the-rain', 'newsletter'],
]);
