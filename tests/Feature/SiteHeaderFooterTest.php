<?php

use Statamic\Facades\GlobalSet;
use Statamic\Globals\Variables;

/**
 * The header menu and the footer on every page come from the Header and
 * Footer globals (Control Panel → Globals).
 */
function globalVariables(string $handle): Variables
{
    return GlobalSet::findByHandle($handle)->inDefaultSite();
}

test('the header and footer globals pass their blueprint validation', function (string $handle) {
    $variables = globalVariables($handle);
    $fields = $variables->blueprint()->fields()->addValues($variables->data()->all())->preProcess();

    expect(fn () => $fields->validator()->validate())->not->toThrow(Exception::class);
})->with(['site_header', 'site_footer']);

test('the header renders its menu, dropdown and buttons from the global', function () {
    $header = globalVariables('site_header');
    $response = $this->get('/portfolio')->assertSuccessful();

    foreach ($header->get('menu_links') as $link) {
        $response->assertSee('href="'.$link['url'].'"', false)->assertSee($link['label']);
    }

    foreach ($header->get('dropdown_items') as $item) {
        $response->assertSee($item['title'])->assertSee($item['description'])->assertSee($item['mobile_description']);
    }

    $response->assertSee($header->get('dropdown_label'))
        ->assertSee($header->get('feature_title'))
        ->assertSee($header->get('quote_label'))
        ->assertSee($header->get('register_label'));
});

test('the footer renders its columns, registrations and legal links from the global', function () {
    $footer = globalVariables('site_footer');
    $response = $this->get('/')->assertSuccessful();

    foreach (['tagline', 'newsletter_label', 'newsletter_text', 'newsletter_success', 'newsletter_error', 'registered_label', 'copyright', 'status'] as $handle) {
        $response->assertSee($footer->get($handle), false);
    }

    foreach ($footer->get('columns') as $column) {
        $response->assertSee($column['heading']);

        foreach ($column['links'] as $link) {
            $response->assertSee('href="'.$link['url'].'"', false)->assertSee($link['label']);
        }
    }

    foreach ($footer->get('registrations') as $registration) {
        $response->assertSee($registration);
    }

    $response->assertSee('© '.now()->year.' '.$footer->get('copyright'), false);
});

test('the current page is highlighted in the menu and footer only where it should be', function () {
    $html = $this->get('/features')->getContent();

    expect($html)->toContain('href="/features" aria-current="page" class="nav_link w--current"')
        ->and($html)->not->toContain('class="footer_link w--current">Consultancy');

    expect($this->get('/privacy')->getContent())
        ->toContain('aria-current="page" class="footer_legal-link w--current">Privacy');
});

test('changes saved in the control panel appear in the header and footer', function () {
    $paths = [base_path('content/globals/default/site_header.yaml'), base_path('content/globals/default/site_footer.yaml')];
    $originals = array_map('file_get_contents', $paths);

    try {
        $header = globalVariables('site_header');
        $header->set('menu_links', [...$header->get('menu_links'), ['id' => 'hxnavtest', 'label' => 'Careers', 'url' => '/careers']])
            ->set('dropdown_items', [])
            ->set('register_label', null)
            ->save();

        $footer = globalVariables('site_footer');
        $footer->set('status', null)->set('tagline', 'Engineers you can call.')->save();

        $html = $this->get('/')
            ->assertSee('Engineers you can call.')
            ->assertDontSee('footer_status-dot', false)
            ->assertDontSee('nav_dropdown-toggle', false)
            ->assertDontSee('is-signin', false)
            ->getContent();

        expect(substr_count($html, '>Careers</a>'))->toBe(2);
    } finally {
        array_map(fn ($path, $original) => file_put_contents($path, $original), $paths, $originals);
    }
});
