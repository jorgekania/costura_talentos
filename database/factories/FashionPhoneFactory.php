<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\PhoneType;
use App\Models\FashionCompany;
use App\Enums\RegistrationType;
use Illuminate\Database\Eloquent\Factories\Factory;

class FashionPhoneFactory extends Factory
{
    public function definition(): array
    {
        return [
            'fashion_company_id' => FashionCompany::all()->random()->id,
            'phone_number'       => fake()->phoneNumberCleared,
            'professional_or_company' => RegistrationType::getRandomEnumValue(),
            'phone_type' => PhoneType::getRandomEnumValue()
        ];
    }
}
