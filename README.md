# Instantly login as user via a single button tap. Especially useful for dev environments.

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
return [
    'model' => \App\Models\User::class,

    'guard' => 'web',
    
    'route' => [
        'name' => 'instant-login',
        'url'  => '/instant-login',
    ],

    'redirect' => null,
];
```

## Usage

Add the login button to your view with:
```blade
<x-instant-login::button />

OR

@include('instant-login::components/button')
```
And it will login the first user it finds.

If it only needs to be shown on dev environments put it in an if statement:
```blade
@production
    <x-instant-login::button />
@endproduction

OR

@if(app()->isProduction())
    <x-instant-login::button />
@endif
```

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

## Todo

[] Write tests

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
