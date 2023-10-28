<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\FashionCompany;
use Illuminate\Database\Eloquent\Factories\Factory;

class FashionPhoneFactory extends Factory
{
    public function definition(): array
    {
        return [
            'fashion_company_id' => FashionCompany::all()->random()->id,
            'phone_number'       => fake()->phoneNumberCleared,
        ];
    }
}
