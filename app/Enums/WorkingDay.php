<?php

namespace App\Enums;

use App\Traits\EnumTrait;

enum WorkingDay: string
{
    use EnumTrait;

    case FULL_TIME = "Período Integral";
    case PARTIAL_MORNING = "Parcial Manhã";
    case PARTIAL_AFTERNOON = "Parcial Tarde";
    case PARTIAL_NIGHT = "Parcial Noite";
    case NIGHT = "Noturno";
}
