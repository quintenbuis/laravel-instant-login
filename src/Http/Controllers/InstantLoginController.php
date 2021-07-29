<?php

namespace Quintenbuis\InstantLogin\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Quintenbuis\InstantLogin\InstantLogin;

class InstantLoginController
{
    public function __invoke(Request $request)
    {
        Auth::login(
            User::where(InstantLogin::$filterUsingArray)->first()
        );

        return redirect()->intended(
            config('instant-login.redirect')
        );
    }
}
