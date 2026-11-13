<?php

use Statamic\Facades\Entry;

/**
 * News items and articles live in one News collection (handle: posts) and
 * each one has its own page at /news/{slug}; files are stored in Assets.
 */
function newsEntry(string $slug): Statamic\Contracts\Entries\Entry
{
    return Entry::query()->where('collection', 'posts')->where('slug', $slug)->first();
}

test('every news entry passes its blueprint validation and has its own page', function () {
    Entry::query()->where('collection', 'posts')->get()->each(function ($entry) {
        $fields = $entry->blueprint()->fields()->addValues([...$entry->data()->all(), 'date' => $entry->date()->format('Y-m-d'), 'slug' => $entry->slug()])->preProcess();

        expect(fn () => $fields->validator()->validate())->not->toThrow(Exception::class);

        $this->get($entry->url())->assertSuccessful()->assertSee($entry->get('title'));
    });
});

test('a news item page shows its story, event details and attachment', function () {
    $item = newsEntry('world-engineering-day-2024');

    $this->get('/news/world-engineering-day-2024')
        ->assertSee($item->get('summary'), false)
        ->assertSee('Engineering Solution for Sustainable Development')
        ->assertSee('Event: 4 Mar 2024, Beaco Hotel, Mbeya City')
        ->assertSee('IET Mbeya & Songwe', false)
        ->assertSee('href="'.$item->augmentedValue('attachment')->value()->url().'"', false)
        ->assertSee('Download the invitation')
        ->assertSee('More news')
        ->assertDontSee('class="author-card"', false)
        ->assertDontSee('class="cta-box"', false);

    expect(file_exists(public_path('assets/files/news/world-engineering-day-2024.jpg')))->toBeTrue();
});

test('an article keeps its author card, paper download and closing box', function () {
    $this->get('/news/why-the-ruvu-to-mlandizi-road-keeps-failing-in-the-rain')
        ->assertSee('class="author-card"', false)
        ->assertSee('/assets/files/publications/effects-of-waterlogging-on-the-performance-of-ruvu-to-mlandizi-road-pavement.pdf', false)
        ->assertSee('Related publications')
        ->assertSee('Building on difficult ground?');
});

test('nothing in the news collection points at the old file server', function () {
    Entry::query()->where('collection', 'posts')->get()->each(function ($entry) {
        expect(json_encode($entry->data()->all()))->not->toContain('software.hmxtech.co.tz');
        $this->get($entry->url())->assertDontSee('software.hmxtech.co.tz/static');
    });
});

test('a news item created in the control panel appears first on the news page with its own page', function () {
    $entry = Entry::make()->collection('posts')->blueprint('news_item')->slug('site-visit-to-mbalizi-bridge')
        ->date(now())
        ->data(['title' => 'Site visit to Mbalizi bridge', 'kind' => 'event', 'summary' => 'Our engineers inspected the deck and bearings.', 'content' => 'The full report follows.']);
    $entry->save();

    try {
        $this->get('/news')->assertSeeInOrder(['Site visit to Mbalizi bridge', 'Truss Analyzer, free in your browser and on Windows'])
            ->assertSee('href="/news/site-visit-to-mbalizi-bridge"', false);

        $this->get('/news/site-visit-to-mbalizi-bridge')->assertSuccessful()->assertSee('The full report follows.');
    } finally {
        $entry->delete();
    }
});
