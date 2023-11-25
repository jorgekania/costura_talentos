<?php

namespace App\Helpers;

class MyStrings
{
    public static function sanitize(string $string)
    {
        return preg_replace("/[^0-9]/", "", $string);
    }
}
