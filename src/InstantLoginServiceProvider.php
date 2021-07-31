<?php

namespace Quintenbuis\InstantLogin;

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
