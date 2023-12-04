<?php

declare(strict_types=1);

namespace App\Enums;

use App\Traits\EnumTrait;

enum HierarchicalLevel: string
{
    use EnumTrait;

    case TRAINEE = "Estagiário ou Trainee";
    case OPERATIONAL = "Operacional";
    case ASSISTANT = "Auxiliar ou Assistente";
    case ANALYST = "Analista";
    case IN_CHARGE = "Encarregado";
    case SUPERVISOR = "Supervisor";
    case CONSULTANT = "Consultor";
    case SPECIALIST = "Especialista";
    case COORDINATOR = "Coordenador";
    case MANAGER = "Gerente";
    case DIRECTOR = "Diretor";
}
