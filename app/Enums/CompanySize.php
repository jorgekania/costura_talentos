<?php

namespace App\Enums;

use App\Traits\EnumTrait;

enum CompanySize: string
{
    use EnumTrait;

    case SMALL = 'PEQUENA';
    case MEDIUM = 'MÉDIA';
    case BIG = 'GRANDE';
}
