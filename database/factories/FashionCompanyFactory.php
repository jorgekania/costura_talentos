<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\CompanySize;
use App\Enums\HiringRegime;
use App\Enums\PreferToWork;
use App\Enums\FormOfRemuneration;
use Illuminate\Database\Eloquent\Factories\Factory;

class FashionCompanyFactory extends Factory
{
    public function definition(): array
    {
        return [
            'corporate_reason' => fake()->company,
            'email'            => fake()->email,
            'password'         => bcrypt('password'),
            'logo'             => 'company_logos/corporate-company.png',
            'zip_code'         => fake()->postcode,
            'address'          => fake()->streetName(),
            'number'           => fake()->buildingNumber,
            'neighborhood'     => fake()->sentence(2),
            'city'             => fake()->city,
            'long_state'       => fake()->state,
            'short_state'      => fake()->stateAbbr,
            'company_size'     => CompanySize::getRandomEnumValue(),
            'description'      => fake()->sentence(2),
            'website'          => fake()->domainName(),
        ];
    }
}
