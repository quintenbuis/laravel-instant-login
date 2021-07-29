<?php

namespace Quintenbuis\InstantLogin;

class InstantLogin
{
    public static $filterUsingArray = [];

    public static function filterUsing(array $array)
    {
        static::$filterUsingArray = $array;
    }
}
