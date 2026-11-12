<?php

test('the how we work page presents the three HMXTECH delivery routes', function () {
    $this->get('/how-we-work')
        ->assertSuccessful()
        ->assertSee('<title>How we work: consultancy, design and build, or construction | HMXTECH</title>', false)
        ->assertSee('Three ways to work with us.')
        ->assertSeeInOrder(['Consultancy', 'Design and build', 'Construction'])
        ->assertSee('Every route, side by side.')
        ->assertSee('Defects liability support')
        ->assertSee('How do you price a project?')
        ->assertSee('Tell us what you want to build.')
        ->assertSee('href="tel:+255758526792"', false);
});

test('no healthcare pricing copy is left on the how we work page', function () {
    $html = $this->get('/how-we-work')->getContent();

    expect(strip_tags($html))->not->toContain('Carefront')
        ->not->toContain('patient')
        ->not->toContain('per provider')
        ->not->toContain('HIPAA')
        ->not->toContain('free trial');

    expect($html)->not->toContain('billing-toggle')
        ->not->toContain('price-annual');
});

test('the old pricing address redirects to how we work', function () {
    $this->get('/pricing')->assertRedirect('/how-we-work')->assertStatus(301);
});
