<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\RegistrationType;
use App\Enums\SocialMedia;
use App\Models\FashionCompany;
use Illuminate\Database\Eloquent\Factories\Factory;

class FashionSocialMediaCompanyFactory extends Factory
{
    public function definition(): array
    {
        return [
            'fashion_company_id' => FashionCompany::all()->random()->id,
            'name_social_media'  => SocialMedia::getRandomEnumValue(),
            'social_media_url'   => fake()->domainName(),
        ];
    }
}
