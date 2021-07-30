<?php

namespace Quintenbuis\InstantLogin\Tests\Models;

use Illuminate\Contracts\Auth\Authenticatable;

class User extends \Illuminate\Database\Eloquent\Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    protected $guarded = [];
}
