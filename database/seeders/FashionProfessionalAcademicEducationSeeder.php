<?php

namespace Database\Seeders;

use App\Models\FashionProfessionalAcademicEducation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FashionProfessionalAcademicEducationSeeder extends Seeder
{
    public function run(): void
    {
        FashionProfessionalAcademicEducation::factory(50)->create();
    }
}
