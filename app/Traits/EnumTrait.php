<?php

namespace App\Traits;

trait EnumTrait
{
    public static function getRandomEnumName(): string
    {
        $arr = [];
        $arrDT = static::cases();

        for ($i = 0; $i < static::count(); $i++) {
            $arr[$i] = $arrDT[$i]->name;
        }

        $i = array_rand($arr, 1);

        return $arrDT[$i]->name;
    }

    public static function getRandomEnumValue(): string
    {
        $arr = [];
        $arrDT = static::cases();

        for ($i = 0; $i < static::count(); $i++) {
            $arr[$i] = $arrDT[$i]->value;
        }

        $i = array_rand($arr, 1);

        return $arrDT[$i]->value;
    }

    public static function count(): int
    {
        return count(static::cases());
    }
}
