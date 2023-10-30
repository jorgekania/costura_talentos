<?php

namespace App\Enums;

use App\Traits\EnumTrait;

enum FormOfRemuneration: string
{
    use EnumTrait;

    case MONTH = 'MÊS';
    case DAY = 'DIA';
    case HOUR = 'HORA';
}
