<?php

namespace App\Filters;

use App\Enums\HiringRegime;
use App\Models\FashionVacancy;
use App\Enums\FormOfRemuneration;
use App\Models\FashionIndustrialMachines;
use App\Models\FashionProfessionalSpecialization;
use Illuminate\Database\Eloquent\Collection;

class FiltersVacancies
{
    public function filterSpecialization()
    {
        return FashionProfessionalSpecialization::orderBy(
            "specialization",
            "asc"
        )->pluck("specialization", "id");
    }

    public function filterCity(Collection $vacancies): array
    {
        $citiesAndState = [];

        foreach ($vacancies as $vacancy) {
            $citiesAndState[] =
                $vacancy->company->city . "/" . $vacancy->company->short_state;
        }

        usort($citiesAndState, function ($a, $b) {
            return strcmp($a, $b);
        });

        return array_unique($citiesAndState);
    }

    public function filterIndustrialMachines()
    {
        return FashionIndustrialMachines::orderBy("machines", "asc")->pluck(
            "machines",
            "id"
        );
    }

    public function filterHiringRegime()
    {
        return HiringRegime::cases();
    }

    public function filterFormOfRemuneration()
    {
        return FormOfRemuneration::cases();
    }

    public function filterRemunerationValueMin()
    {
        return 0;
    }

    public function filterRemunerationValueMax()
    {
        return 0;
    }
}
