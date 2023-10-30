<?php

namespace App\Enums;

use App\Traits\EnumTrait;

enum PhoneType: string
{
    use EnumTrait;
    
    case MOBILE = 'CELULAR';
    case WHATSAPP = 'WHATSAPP';
    case FIX = 'FIXO';

}
