<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Enums\HierarchicalLevel;
use App\Models\FashionProfessional;
use Illuminate\Database\Eloquent\Factories\Factory;

class FashionProfessionalExperienceFactory extends Factory
{
    public function definition(): array
    {
        return [
            "fashion_professional_id" => FashionProfessional::all()->random()->id,
            "company_name" => fake()->name,
            "position" => fake()->sentence(2),
            "remuneration" => rand(100000, 1000000),
            "hierarchical_level" => HierarchicalLevel::getRandomEnumValue(),
            "start_date" => fake()->dateTimeBetween(new Carbon('2020-01-01'), new Carbon('2025-12-31')),
            "end_date" => fake()->dateTimeBetween(new Carbon('2020-01-01'), new Carbon('2025-12-31')),
            "curreent_job"=>rand(0, 1),
            "description_activities"=>fake()->realText(rand(100, 200)),
        ];
    }
}
