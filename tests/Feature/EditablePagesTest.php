<?php

use Statamic\Facades\Entry;

/**
 * Every page converted from the Webflow export gets its own blueprint. These
 * checks walk that blueprint, so a field that an editor can fill in but the
 * template forgets to print is caught without a hand-written assertion.
 */
dataset('editable pages', [
    'home' => ['/', 'home'],
    'features' => ['/features', 'features'],
    'contact' => ['/contact', 'contact'],
    'how we work' => ['/how-we-work', 'how_we_work'],
    'portfolio' => ['/portfolio', 'portfolio'],
]);

/**
 * Text an editor typed into the page's own tabs (not Main, SEO or Sidebar).
 *
 * @return list<string>
 */
function editableStrings(Statamic\Contracts\Entries\Entry $entry): array
{
    $strings = [];

    foreach ($entry->blueprint()->tabs() as $tab) {
        if (in_array($tab->handle(), ['main', 'seo', 'sidebar'], true)) {
            continue;
        }

        foreach ($tab->fields()->all() as $field) {
            $strings = [...$strings, ...stringsFor($field->type(), $field->config(), $entry->get($field->handle()))];
        }
    }

    return array_values(array_filter($strings, fn (string $text) => trim($text) !== ''));
}

/**
 * @param  array<string, mixed>  $config
 * @return list<string>
 */
function stringsFor(string $type, array $config, mixed $value): array
{
    return match ($type) {
        'text', 'textarea' => is_string($value) ? [$value] : [],
        'list' => array_values(array_filter((array) $value, 'is_string')),
        'bard' => is_string($value) ? array_map('trim', preg_split('/<[^>]+>/', $value, -1, PREG_SPLIT_NO_EMPTY)) : [],
        'grid' => collect((array) $value)->flatMap(fn (array $row) => collect($config['fields'] ?? [])
            ->flatMap(fn (array $sub) => stringsFor($sub['field']['type'] ?? 'text', $sub['field'], $row[$sub['handle']] ?? null)))->all(),
        default => [],
    };
}

test('the page uses its own blueprint and its content passes validation', function (string $uri, string $blueprint) {
    $entry = Entry::query()->where('collection', 'pages')->get()->first(fn ($entry) => $entry->url() === $uri);

    expect($entry->blueprint()->handle())->toBe($blueprint);

    $fields = $entry->blueprint()->fields()->addValues($entry->data()->all())->preProcess();

    expect(fn () => $fields->validator()->validate())->not->toThrow(Exception::class);
})->with('editable pages');

test('every piece of text entered in the control panel is shown on the page', function (string $uri) {
    $entry = Entry::query()->where('collection', 'pages')->get()->first(fn ($entry) => $entry->url() === $uri);
    $response = $this->get($uri)->assertSuccessful();

    $strings = editableStrings($entry);

    expect($strings)->not->toBeEmpty();

    foreach ($strings as $text) {
        $response->assertSee($text);
    }
})->with('editable pages');
