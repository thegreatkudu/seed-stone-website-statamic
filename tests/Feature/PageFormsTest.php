<?php

test('page forms post to their Statamic form handlers', function (string $uri, string $form) {
    $this->get($uri)
        ->assertSuccessful()
        ->assertSee('action="'.config('app.url').'/!/forms/'.$form.'"', false)
        ->assertSee('name="_token"', false)
        ->assertSee('name="website"', false)
        ->assertDontSee('wp-json/metform', false);
})->with([
    'contact page' => ['/contact-us', 'contact'],
    'product quote' => ['/products/cashewnut', 'quote'],
    'service quote' => ['/services/direct-sourcing', 'quote'],
    'blog newsletter' => ['/posts/a-guide-to-exporting-crops-from-tanzania', 'newsletter'],
]);
