![quintenbuis/laravel-instant-login Banner](https://banners.beyondco.de/laravel%20instant%20login.png?theme=light&packageManager=composer+require&packageName=quintenbuis%2Flaravel-instant-login&pattern=architect&style=style_1&description=Instantly+login+to+your+application&md=1&showWatermark=0&fontSize=100px&images=lock-open)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/quintenbuis/laravel-instant-login.svg?style=flat-square)](https://packagist.org/packages/quintenbuis/laravel-instant-login)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/quintenbuis/laravel-instant-login/run-tests?label=tests)](https://github.com/quintenbuis/laravel-instant-login/actions?query=workflow%3Arun-tests+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/quintenbuis/laravel-instant-login.svg?style=flat-square)](https://packagist.org/packages/quintenbuis/laravel-instant-login)

Getting tired of always entering login details in local dev environments? 
This package adds a button to instantly login a user!

## Installation

You can install the package via composer:

```bash
composer require quintenbuis/laravel-instant-login
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Quintenbuis\InstantLogin\InstantLoginServiceProvider" --tag="instant-login-config"
```

You can publish the views with:
```bash
php artisan vendor:publish --provider="Quintenbuis\InstantLogin\InstantLoginServiceProvider" --tag="instant-login-views"
```

This is the contents of the published config file:

```php
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

```

## Usage

Add the login button to your view with:
```blade
<x-instant-login::button />

{{-- Adding custom classes --}}
<x-instant-login::button class="bg-red-600" />
```
And it will login the first user it finds.

The instant login button protects against production environments by default.

If you want to customize which user to get you can add the following to (for example) your `AppServiceProvider`:
```php
InstantLogin::filterUsing([
    ['email' => 'quinten.buis@gmail.com'],
    ['admin' => true]
]);
```

This will be going through the `where()` method on the model.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Quinten Buis](https://github.com/quintenbuis)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
