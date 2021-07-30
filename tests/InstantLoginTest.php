<?php

use Quintenbuis\InstantLogin\InstantLogin;
use Quintenbuis\InstantLogin\Tests\Models\User;

uses(\Illuminate\Foundation\Testing\RefreshDatabase::class);

beforeEach(function () {
    config()->set('app.key', 'base64:5MZ8wCacI8omsEi7j0MrXixnQWEt/CVUTRa2sMe/k6w=');
    config()->set('instant-login.model', User::class);

    setupUsersTable();

    User::create([
        'name'     => 'test 1',
        'email'    => 'test@test1.com',
        'password' => bcrypt('test123'),
    ]);
});

it('logs in the user', function () {
    InstantLogin::filterUsing([]);

    expect(auth()->user())->toBeNull();

    $this->get(route(config('instant-login.route.name')));

    expect(auth()->user())->not->toBeNull();
});

test('the user can be filtered', function () {
    User::create([
        'name'     => 'test 2',
        'email'    => 'test@test2.com',
        'password' => bcrypt('test123'),
    ]);

    InstantLogin::filterUsing(['name' => 'test 2']);

    $this->get(route(config('instant-login.route.name')));

    expect(auth()->user())
        ->name->toBe('test 2');
});
