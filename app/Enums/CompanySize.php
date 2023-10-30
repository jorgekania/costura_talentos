<?php

namespace App\Enums;

use App\Traits\EnumTrait;
use NunoMaduro\Collision\Exceptions\TestException;

enum CompanySize: string
{
    use EnumTrait;

    case BIG = 'GRANDE';
    case MEDIUM = 'MÉDIA';
    case SMALL = 'PEQUENA';
}
