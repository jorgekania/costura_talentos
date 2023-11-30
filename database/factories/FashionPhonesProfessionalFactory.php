<?php

namespace Database\Factories;

use App\Enums\PhoneType;
use App\Models\FashionProfessional;
use Illuminate\Database\Eloquent\Factories\Factory;

class FashionPhonesProfessionalFactory extends Factory
{

    public function definition(): array
    {
        return [
            'fashion_professional_id' => FashionProfessional::all()->random()->id,
            'phone_number'       => fake()->phoneNumberCleared,
            'phone_type' => PhoneType::getRandomEnumValue()
        ];
    }
}
