<?php

namespace Database\Factories;

use App\Models\FashionCompany;
use App\Models\FashionProfessionalSpecialization;
use Illuminate\Database\Eloquent\Factories\Factory;

class FashionVacancyFactory extends Factory
{

    public function definition(): array
    {
        return [
            'fashion_company_id'              => FashionCompany::all()->random()->id,
            'specializations_id'              => FashionProfessionalSpecialization::all()->random()->id,
            'activities_and_responsibilities' => fake()->sentence(5),
            'vacancy_requirements'            => fake()->sentence(5),
        ];
    }
}
