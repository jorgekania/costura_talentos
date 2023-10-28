<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\FashionCompany;
use Illuminate\Database\Eloquent\Factories\Factory;

class FashionSocialMediaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'fashion_company_id' => FashionCompany::all()->random()->id,
            'name_social_media'  => fake()->userName,
            'social_media_url'   => fake()->domainName(),
        ];
    }
}
