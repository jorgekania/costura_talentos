<?php

namespace Database\Seeders;

use App\Models\FashionProfessionalExperience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FashionProfessionalExperienceSeeder extends Seeder
{
    
    public function run(): void
    {
        FashionProfessionalExperience::factory(50)->create();
    }
}
