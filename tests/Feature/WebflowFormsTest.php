<?php

use Illuminate\Support\Facades\Mail;
use Statamic\Facades\Form;
use Statamic\Forms\Email;

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
    foreach (['project_enquiry', 'newsletter'] as $handle) {
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
    'contact quote request' => ['/contact', 'project_enquiry', 'quote'],
    'research newsletter' => ['/publications', 'newsletter', 'newsletter-research'],
    'changelog newsletter' => ['/news', 'newsletter', 'newsletter-changelog'],
    'news newsletter' => ['/news', 'newsletter', 'newsletter-news'],
    'footer newsletter' => ['/how-we-work', 'newsletter', 'newsletter-footer'],
]);

test('a quote request is stored and replaces the form with the success message', function () {
    $form = webflowFormPayload($this->get('/contact')->getContent(), 'project_enquiry');

    $this->post($form['action'], $form['fields'] + [
        'first_name' => 'Asha',
        'last_name' => 'Mwakalinga',
        'email' => 'asha@example.test',
        'phone' => '+255 700 000 000',
        'project_type' => 'building',
        'location' => 'Mbeya',
        'message' => 'A two-storey house on a sloping plot.',
    ])->assertRedirect('/contact#quote');

    $submission = Form::find('project_enquiry')->submissions()
        ->first(fn ($submission) => $submission->get('email') === 'asha@example.test');

    expect($submission)->not->toBeNull()
        ->and($submission->get('first_name'))->toBe('Asha')
        ->and($submission->get('project_type'))->toBe('building')
        ->and($submission->get('location'))->toBe('Mbeya');

    $this->get('/contact')
        ->assertSee('w-form-done" style="display:block"', false)
        ->assertDontSee('action="'.config('app.url').'/!/forms/project_enquiry"', false);
});

test('an invalid quote request shows the failure message and keeps the input', function () {
    $form = webflowFormPayload($this->get('/contact')->getContent(), 'project_enquiry');

    $this->post($form['action'], $form['fields'] + [
        'first_name' => 'Asha',
        'email' => 'not-an-email',
    ])->assertRedirect('/contact#quote');

    $this->get('/contact')
        ->assertSee('w-form-fail" style="display:block"', false)
        ->assertSee('value="Asha"', false)
        ->assertSee('action="'.config('app.url').'/!/forms/project_enquiry"', false);
});

test('quote requests are emailed to HMXTECH', function () {
    expect(Form::find('project_enquiry')->email()[0]['to'])->toBe('info@hmxtech.co.tz');
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

test('a submitted form sends its email to the HMXTECH inbox', function (string $uri, string $handle, array $input, string $subject) {
    $form = webflowFormPayload($this->get($uri)->getContent(), $handle);

    $this->post($form['action'], $form['fields'] + $input)->assertRedirect();

    Mail::assertSent(Email::class, function (Email $mail) use ($input, $subject) {
        $mail->build();

        return $mail->hasTo('info@hmxtech.co.tz')
            && $mail->hasReplyTo($input['email'])
            && $mail->subject === $subject;
    });
})->with([
    'quote request' => ['/contact', 'project_enquiry', [
        'first_name' => 'Asha',
        'last_name' => 'Mwakalinga',
        'email' => 'asha.mail@example.test',
        'project_type' => 'building',
        'message' => 'A warehouse in Mbalizi.',
    ], 'New quote request from the website'],
    'news sign-up' => ['/news', 'newsletter', ['email' => 'news.mail@example.test'], 'New newsletter sign-up'],
]);
