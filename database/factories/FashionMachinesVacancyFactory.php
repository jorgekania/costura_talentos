<?php

namespace Database\Factories;

use App\Models\FashionIndustrialMachines;
use App\Models\FashionVacancy;
use Illuminate\Database\Eloquent\Factories\Factory;

class FashionMachinesVacancyFactory extends Factory
{

    public function definition(): array
    {
        return [
            'fashion_vacancies_id'   => FashionVacancy::all()->random()->id,
            'industrial_machines_id' => FashionIndustrialMachines::all()->random()->id,
        ];
    }
}
