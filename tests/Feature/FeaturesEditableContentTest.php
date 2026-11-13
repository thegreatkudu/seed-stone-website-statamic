<?php

use Statamic\Facades\Entry;

/**
 * The Features page text comes from its entry (Features Page blueprint), so
 * editors can change it in the control panel.
 */
function featuresEntry(): Statamic\Contracts\Entries\Entry
{
    return Entry::query()->where('collection', 'pages')->where('slug', 'features')->first();
}

test('the features entry uses its own blueprint and passes validation', function () {
    $features = featuresEntry();

    expect($features->blueprint()->handle())->toBe('features');

    $fields = $features->blueprint()->fields()->addValues($features->data()->all())->preProcess();

    expect(fn () => $fields->validator()->validate())->not->toThrow(Exception::class);
});

test('every section renders its text from the features entry', function () {
    $features = featuresEntry();
    $response = $this->get('/features')->assertSuccessful();

    foreach ([
        'hero_tag', 'hero_heading', 'hero_text', 'hero_primary_label', 'hero_secondary_label',
        'record_tag', 'record_heading', 'record_text', 'record_button_label',
        'cta_heading', 'cta_text', 'cta_primary_label', 'cta_secondary_label',
    ] as $handle) {
        expect($features->get($handle))->not->toBeEmpty("{$handle} is empty");
        $response->assertSee($features->get($handle));
    }

    expect($features->get('services'))->toHaveCount(5);

    foreach ($features->get('services') as $service) {
        $response->assertSee($service['tag'])
            ->assertSee($service['summary'])
            ->assertSee($service['heading'])
            ->assertSee($service['text'])
            ->assertSee($service['link_label']);

        foreach ($service['points'] as $point) {
            $response->assertSee($point);
        }
    }
});

test('service anchors are named after the services, not the old template', function () {
    $html = $this->get('/features')->getContent();

    foreach (['consultancy', 'design', 'building', 'civil-works', 'testing'] as $anchor) {
        expect($html)->toContain('id="'.$anchor.'" class="anchor"')
            ->and($html)->toContain('href="#'.$anchor.'"');
    }

    foreach (['scheduling', 'intake', 'messaging', 'billing', 'integrations'] as $old) {
        expect($html)->not->toContain('id="'.$old.'"');
    }
});

test('changes saved in the control panel appear on the features page', function () {
    $path = base_path('content/collections/pages/features.md');
    $original = file_get_contents($path);

    try {
        $features = featuresEntry();
        $services = $features->get('services');
        $services[0]['points'][] = 'Valuation of existing buildings';

        $features->set('hero_heading', 'Engineering, start to finish.')
            ->set('services', $services)
            ->set('hero_secondary_label', null)
            ->saveQuietly();

        $this->get('/features')
            ->assertSee('Engineering, start to finish.')
            ->assertSee('Valuation of existing buildings')
            ->assertDontSee('Five services. One registered team.')
            ->assertDontSee('class="button is-secondary">How we work', false);
    } finally {
        file_put_contents($path, $original);
    }
});
