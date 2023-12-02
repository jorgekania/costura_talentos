<?php

namespace Database\Seeders;

use App\Models\FashionSkillsProfessional;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FashionSkillsProfessionalSeeder extends Seeder
{

    public function run(): void
    {
        FashionSkillsProfessional::factory(50)->create();
    }
}
