<?php

namespace App\Enums;

use App\Traits\EnumTrait;

enum HiringRegime: string
{
    use EnumTrait;

    case FACCIONISTA = "Faccionista";
    case AUTONOMOUS = "Autônomo";
    case COOPERATED = "Cooperado";
    case EFFECTIVE_CLT = "Efetivo – CLT";
    case INTERNSHIP = "Estágio";
    case YOUNG_APPRENTICE = "Jovem Aprendiz";
    case OTHERS = "Outros";
    case SERVICE_PROVIDER_PJ = "Prestador de Serviços (PJ)";
    case TEMPORARY = "Temporário";
    case TRAINEE = "Trainee";
}
