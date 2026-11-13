<?php

const ARTICLE_URI = '/news/why-the-ruvu-to-mlandizi-road-keeps-failing-in-the-rain';

test('the article is rendered from the post entry', function () {
    $this->get(ARTICLE_URI)
        ->assertSuccessful()
        ->assertSee('<title>Why the Ruvu to Mlandizi road keeps failing in the rain | HMXTECH</title>', false)
        ->assertSeeInOrder([
            'Why the Ruvu to Mlandizi road keeps failing in the rain',
            'HMXTECH Engineering',
            'Water from below, not only from above',
            'What waterlogging does to a pavement',
            'Why patching alone does not last',
            'Download the paper (PDF)',
            'Related publications',
        ])
        ->assertSee('Effects-of-Water-logging-on-the-Performance-of-Ruvu-to-Mlandizi-Road-Pavement.pdf', false)
        ->assertSee('datetime="2026-11-12"', false);
});

test('the article lists related road publications', function () {
    $this->get(ARTICLE_URI)
        ->assertSee('Stabilization of Laterite Soil with Pozzolan-Calcium Hydroxide Binders');
});

test('the old sample post redirects to the article', function () {
    $this->get('/posts/harbor-family-no-shows')
        ->assertMovedPermanently()
        ->assertRedirect(ARTICLE_URI);
});

test('no template copy is left on the article', function () {
    $html = strip_tags($this->get(ARTICLE_URI)->getContent());

    expect($html)->not->toContain('Carefront')
        ->not->toContain('Harbor Family')
        ->not->toContain('patient')
        ->not->toContain('Book a demo');
});
