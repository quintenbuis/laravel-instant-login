<?php

namespace Quintenbuis\InstantLogin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Quintenbuis\InstantLogin\InstantLogin;

class InstantLoginController
{
    public function __invoke(Request $request)
    {
        Auth::guard(
            config('instant-login.guard')
        )->login(
            config('instant-login.model')::where(InstantLogin::$filterUsingArray)->first()
        );

        return redirect()->intended(
            config('instant-login.redirect')
        );
    }
}
