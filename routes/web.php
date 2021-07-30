<?php

use Illuminate\Support\Facades\Route;
use Quintenbuis\InstantLogin\Http\Controllers\InstantLoginController;

if (! app()->isProduction()) {
    Route::middleware('web')
        ->get(
            config('instant-login.route.url'),
            InstantLoginController::class
        )
        ->name(
            config('instant-login.route.name')
        );
}
