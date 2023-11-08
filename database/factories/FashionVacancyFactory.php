<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\FormOfRemuneration;
use App\Enums\HiringRegime;
use App\Models\FashionCompany;
use App\Models\FashionProfessionalSpecialization;
use Illuminate\Database\Eloquent\Factories\Factory;

class FashionVacancyFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'fashion_company_id'              => FashionCompany::all()->random()->id,
            'specializations_id'              => FashionProfessionalSpecialization::all()->random()->id,
            'activities_and_responsibilities' => fake()->realText(500, 3),
            'vacancy_requirements'            => fake()->realText(500, 5),
            'work_where' => FormOfRemuneration::getRandomEnumValue(),
            'hiring_regime' => HiringRegime::getRandomEnumValue()
        ];
    }
}
