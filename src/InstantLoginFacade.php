<?php

namespace Quintenbuis\InstantLogin;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Quintenbuis\InstantLogin\InstantLogin
 */
class InstantLoginFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-instant-login';
    }
}
