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
        $arrLogos = [
            'company_logos/company_logo_1.png',
            'company_logos/company_logo_2.webp',
            'company_logos/company_logo_3.webp',
            'company_logos/company_logo_4.png',
            'company_logos/company_logo_5.png',
            'company_logos/company_logo_6.jpeg',
            'company_logos/company_logo_7.jpg',
        ];

        $key = array_rand($arrLogos);

        return [
            'corporate_reason' => fake()->company,
            'email'            => fake()->email,
            'password'         => bcrypt('password'),
            'logo'             => $arrLogos[$key],
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
