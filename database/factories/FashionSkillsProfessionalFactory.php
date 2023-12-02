<?php

namespace Database\Factories;

use App\Models\FashionProfessional;
use App\Models\FashionSkill;
use Illuminate\Database\Eloquent\Factories\Factory;


class FashionSkillsProfessionalFactory extends Factory
{

    public function definition(): array
    {
        return [
            'fashion_professional_skill_id' => FashionProfessional::all()->random()->id,
            'fashion_skill_id'  => FashionSkill::all()->random()->id,
        ];
    }
}
