<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\HiringRegime;
use App\Enums\PreferToWork;
use App\Enums\FormOfRemuneration;
use App\Models\FashionProfessionalSpecialization;
use Illuminate\Database\Eloquent\Factories\Factory;

class FashionProfessionalFactory extends Factory
{
    public function definition(): array
    {
        return [
            "avatar" => "professional_avatars/user-icon.png",
            "name" => fake()->name,
            "password" => bcrypt("password"),
            "email" => fake()->email,
            "zip_code" => fake()->postcode,
            "address" => fake()->streetName(),
            "number" => fake()->buildingNumber,
            "neighborhood" => fake()->sentence(2),
            "city" => fake()->city,
            "long_state" => fake()->state,
            "short_state" => fake()->stateAbbr,
            "specialty" =>  FashionProfessionalSpecialization::all()->random(),
            'bio' => fake()->realText(rand(50, 255)),
            "experience" => fake()->realText(rand(100, 200)),
            "portifolio_url" => fake()->url(),
            "curriculum_url" => fake()->url(),
            "prefer_to_work_where" => PreferToWork::getRandomEnumValue(),
            "hiring_regime" => HiringRegime::getRandomEnumValue(),
            "form_of_remuneration" => FormOfRemuneration::getRandomEnumValue(),
        ];
    }
}
