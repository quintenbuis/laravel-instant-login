<?php

return [
    'model' => \App\Models\User::class,

    'guard' => 'web',

    'route' => [
        'name' => 'instant-login',
        'url'  => '/instant-login',
    ],

    'redirect' => null,
];
