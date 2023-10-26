<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FashionProfessionalFactory extends Factory
{

    public function definition(): array
    {
        return [
            'avatar'               => 'professional_avatars/user-icon.png',
            'name'                 => fake()->name,
            'password'             => bcrypt('password'),
            'email'                => fake()->email,
            'zip_code'             => fake()->postcode,
            'address'              => fake()->streetName(),
            'number'               => fake()->buildingNumber,
            'neighborhood'         => fake()->sentence(2),
            'city'                 => fake()->city,
            'long_state'           => fake()->state,
            'short_state'          => fake()->stateAbbr,
            'experience'           => fake()->realText(rand(100,200)),
            'portifolio_url'       => fake()->url(),
            'curriculum_url'       => fake()->url()
        ];
    }
}
