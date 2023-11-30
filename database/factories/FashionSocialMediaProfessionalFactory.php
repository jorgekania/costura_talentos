<?php

namespace Database\Factories;

use App\Enums\SocialMedia;
use App\Models\FashionProfessional;
use Illuminate\Database\Eloquent\Factories\Factory;


class FashionSocialMediaProfessionalFactory extends Factory
{

    public function definition(): array
    {
        return [
            'fashion_professional_id' => FashionProfessional::all()->random()->id,
            'name_social_media'  => SocialMedia::getRandomEnumValue(),
            'social_media_url'   => fake()->domainName(),
        ];
    }
}
