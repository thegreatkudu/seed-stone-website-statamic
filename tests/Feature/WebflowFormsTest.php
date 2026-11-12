<?php

use Illuminate\Support\Facades\Mail;
use Statamic\Facades\Form;

/**
 * Collect the field values a browser would send for the form posting to $action.
 *
 * @return array{action: string, fields: array<string, string>}
 */
function webflowFormPayload(string $html, string $handle): array
{
    $document = new DOMDocument;
    @$document->loadHTML($html);

    foreach ($document->getElementsByTagName('form') as $form) {
        $action = $form->getAttribute('action');

        if (! str_ends_with($action, '/!/forms/'.$handle)) {
            continue;
        }

        $fields = [];

        foreach ($form->getElementsByTagName('input') as $input) {
            if ($input->getAttribute('type') === 'hidden' && $input->getAttribute('name') !== '') {
                $fields[$input->getAttribute('name')] = $input->getAttribute('value');
            }
        }

        return ['action' => parse_url($action, PHP_URL_PATH), 'fields' => $fields];
    }

    throw new RuntimeException("No form posting to [{$handle}] was rendered.");
}

beforeEach(function () {
    Mail::fake();
});

afterEach(function () {
    foreach (['walkthrough', 'newsletter'] as $handle) {
        Form::find($handle)?->submissions()
            ->filter(fn ($submission) => str_ends_with((string) $submission->get('email'), '@example.test'))
            ->each->delete();
    }
});

test('webflow forms post to their Statamic form handlers', function (string $uri, string $handle, string $blockId) {
    $this->get($uri)
        ->assertSuccessful()
        ->assertSee('action="'.config('app.url').'/!/forms/'.$handle.'"', false)
        ->assertSee('id="'.$blockId.'"', false)
        ->assertSee('name="_token"', false)
        ->assertSee('name="website"', false)
        ->assertSee('data-wf-no-turnstile="true"', false)
        ->assertDontSee('data-turnstile-sitekey', false)
        ->assertDontSee('challenges.cloudflare.com/turnstile', false);
})->with([
    'contact walkthrough' => ['/contact', 'walkthrough', 'walkthrough'],
    'research newsletter' => ['/publications', 'newsletter', 'newsletter-research'],
    'changelog newsletter' => ['/changelog', 'newsletter', 'newsletter-changelog'],
    'footer newsletter' => ['/pricing', 'newsletter', 'newsletter-footer'],
]);

test('a walkthrough request is stored and replaces the form with the success message', function () {
    $form = webflowFormPayload($this->get('/contact')->getContent(), 'walkthrough');

    $this->post($form['action'], $form['fields'] + [
        'first_name' => 'Ana',
        'last_name' => 'Silva',
        'email' => 'ana@example.test',
        'clinic' => 'Harbor Family Clinic',
        'providers' => '4-10',
        'message' => 'We would like a walkthrough.',
    ])->assertRedirect('/contact#walkthrough');

    $submission = Form::find('walkthrough')->submissions()
        ->first(fn ($submission) => $submission->get('email') === 'ana@example.test');

    expect($submission)->not->toBeNull()
        ->and($submission->get('first_name'))->toBe('Ana')
        ->and($submission->get('providers'))->toBe('4-10');

    $this->get('/contact')
        ->assertSee('w-form-done" style="display:block"', false)
        ->assertDontSee('action="'.config('app.url').'/!/forms/walkthrough"', false);
});

test('an invalid walkthrough request shows the failure message and keeps the input', function () {
    $form = webflowFormPayload($this->get('/contact')->getContent(), 'walkthrough');

    $this->post($form['action'], $form['fields'] + [
        'first_name' => 'Ana',
        'email' => 'not-an-email',
    ])->assertRedirect('/contact#walkthrough');

    $this->get('/contact')
        ->assertSee('w-form-fail" style="display:block"', false)
        ->assertSee('value="Ana"', false)
        ->assertSee('action="'.config('app.url').'/!/forms/walkthrough"', false);
});

test('a newsletter sign-up records where it came from', function () {
    $form = webflowFormPayload($this->get('/publications')->getContent(), 'newsletter');

    expect($form['fields'])->toHaveKey('source');

    $this->post($form['action'], $form['fields'] + ['email' => 'reader@example.test'])
        ->assertRedirect('/publications#newsletter-research');

    $submission = Form::find('newsletter')->submissions()
        ->first(fn ($submission) => $submission->get('email') === 'reader@example.test');

    expect($submission?->get('source'))->toBe($form['fields']['source']);

    $this->get('/publications')->assertSee('w-form-done" style="display:block"', false);
});

test('a failed footer sign-up only flags the footer form', function () {
    $form = webflowFormPayload($this->get('/publications')->getContent(), 'newsletter');

    $this->post($form['action'], ['source' => 'footer', 'email' => 'not-an-email'] + $form['fields'])
        ->assertRedirect();

    $page = $this->get('/publications')->getContent();

    expect(substr_count($page, 'w-form-fail" style="display:block"'))->toBe(1)
        ->and($page)->toMatch('/footer_form-message w-form-fail" style="display:block"/');
});
