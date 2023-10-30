<?php

namespace App\Enums;

use App\Traits\EnumTrait;

enum HiringRegime: string
{
    use EnumTrait;

    case CLT = 'CLT';
    case PJ = 'PJ';
    case NEGOTIABLE = 'NEGOCIÁVEL';
}
