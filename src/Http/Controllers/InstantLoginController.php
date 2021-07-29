<?php

namespace Quintenbuis\InstantLogin\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InstantLoginController
{
    public function __invoke(Request $request)
    {
        Auth::login(User::first());

        return redirect()->intended(config('instant-login.redirect'));
    }
}
