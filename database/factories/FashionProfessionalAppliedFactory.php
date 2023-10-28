<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\FashionProfessional;
use App\Models\FashionVacancy;
use Illuminate\Database\Eloquent\Factories\Factory;

class FashionProfessionalAppliedFactory extends Factory
{
    public function definition(): array
    {
        return [
            'fashion_professional_id' => FashionProfessional::all()->random()->id,
            'fashion_vacancies_id'    => FashionVacancy::all()->random()->id,
        ];
    }
}
