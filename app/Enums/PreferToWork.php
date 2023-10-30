<?php

namespace App\Enums;

use App\Traits\EnumTrait;

enum PreferToWork: string
{
    use EnumTrait;

    case COMPANY = 'EMPRESA';
    case HOME = 'HOME';
    case HYBRID = 'HIBRIDO';
}
