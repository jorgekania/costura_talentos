<?php

namespace Database\Factories;

use App\Models\FashionAcademicEducation;
use App\Models\FashionCountry;
use App\Models\FashionProfessional;
use App\Models\FashionProfessionalAcademicEducation;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;


class FashionProfessionalAcademicEducationFactory extends Factory
{

    public function definition(): array
    {
        $status = ['concluído', 'cursando', 'trancado'];

        return [
            "fashion_professional_id" => FashionProfessional::all()->random()->id,
            "fashion_academic_education_id" => FashionAcademicEducation::all()->random()->id,
            "institution_name" => fake()->name,
            "fashion_country_id" => FashionCountry::all()->random()->id,
            "state" => fake()->state,
            "status" => $status[array_rand($status)],
            "start_date" => fake()->dateTimeBetween(new Carbon('2020-01-01'), new Carbon('2025-12-31')),
            "end_date" => fake()->dateTimeBetween(new Carbon('2020-01-01'), new Carbon('2025-12-31')),
        ];
    }
}
