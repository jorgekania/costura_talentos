<?php

namespace App\Helpers;

class PasswordGenerator
{
    public static function generatePassword($length = 8): string
    {
        $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $lowercase = "abcdefghijklmnopqrstuvwxyz";
        $numbers = "0123456789";
        $specialChars = '!@#$%&*';

        $password = "";
        $password .= substr(str_shuffle($uppercase), 0, 1);
        $password .= substr(str_shuffle($lowercase), 0, 1);
        $password .= substr(str_shuffle($numbers), 0, 1);
        $password .= substr(str_shuffle($specialChars), 0, 1);

        $remainingLength = $length - 4;
        $allChars = $uppercase . $lowercase . $numbers . $specialChars;
        $password .= substr(str_shuffle($allChars), 0, $remainingLength);

        $password = str_shuffle($password);

        return $password;
    }
}
