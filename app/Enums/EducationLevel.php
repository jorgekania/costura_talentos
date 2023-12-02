<?php

namespace App\Enums;

use App\Traits\EnumTrait;

enum EducationLevel: string
{
    use EnumTrait;

    case ELEMENTARY_EDUCATION_1ST_GRADE = "Ensino Fundamental (1º grau)";
    case EXTRA_CURRICULAR_PROFESSIONAL_COURSE = "Curso extra-curricular / Profissionalizante";
    case HIGH_SCHOOL_2ND_GRADE = "Ensino Médio (2º Grau)";
    case TECHNICAL_COURSE = "Curso Técnico";
    case UNIVERSITY_EDUCATION = "Ensino Superior";
    case POSTGRADUATE_SPECIALIZATION_MBA = "Pós-graduação - Especialização/MBA";
    case POSTGRADUATE_MASTERS = "Pós-graduação - Mestrado";
    case POSTGRADUATE_DOCTORATE = "Pós-graduação - Doutorado";
}
