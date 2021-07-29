<?php

namespace Quintenbuis\InstantLogin;

use Illuminate\Support\Facades\Route;
use Quintenbuis\InstantLogin\Http\Controllers\InstantLoginController;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class InstantLoginServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('instant-login')
            ->hasConfigFile()
            ->hasViews();
    }

    public function boot()
    {
        parent::boot();

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
}
