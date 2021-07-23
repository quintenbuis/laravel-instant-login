<?php

namespace Quintenbuis\InstantLogin\Http\Controllers;

class InstantLoginController
{
    public function __invoke()
    {
        // TODO: Figure out how to authenticate model and have it persist
        return redirect('/dashboard');
    }
}
