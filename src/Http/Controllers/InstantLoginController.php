<?php

namespace Quintenbuis\InstantLogin\Http\Controllers;

use Illuminate\Http\Request;

class InstantLoginController
{
    public function __invoke(Request $request)
    {
        // TODO: Figure out how to authenticate model and have it persist
        return redirect('/dashboard');
    }
}
