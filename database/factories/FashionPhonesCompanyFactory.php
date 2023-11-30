<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\PhoneType;
use App\Models\FashionCompany;
use App\Enums\RegistrationType;
use Illuminate\Database\Eloquent\Factories\Factory;

class FashionPhonesCompanyFactory extends Factory
{
    public function definition(): array
    {
        return [
            'fashion_company_id' => FashionCompany::all()->random()->id,
            'phone_number'       => fake()->phoneNumberCleared,
            'phone_type' => PhoneType::getRandomEnumValue()
        ];
    }
}
