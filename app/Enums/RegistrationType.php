<?php

namespace App\Enums;

use App\Traits\EnumTrait;

enum RegistrationType: string
{
    use EnumTrait;

    case COMPANY = 'EMPRESA';
    case PROFESSIONAL = 'PROFISSIONAL';
}
