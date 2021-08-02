<?php

namespace Quintenbuis\InstantLogin\Tests\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class TestUser extends Authenticatable
{
    protected $guarded = [];
}
