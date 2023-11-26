<?php

namespace App\Helpers;

class MyStrings
{
    public static function sanitize(string $string)
    {
        return $string ? preg_replace("/[^0-9]/", "", $string) : '';
    }
}
