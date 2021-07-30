<?php

return [
    // The model that needs to be signed in
    'model' => \App\Models\User::class,

    // The guard where it must be signed in at
    'guard' => 'web',

    // Route information
    'route' => [
        'name' => 'instant-login',
        'url'  => '/instant-login',
    ],

    // The fallback url when there is no intended route stored
    'redirect' => null,
];
