<?php

namespace Database\Seeders;

use App\Models\FashionSocialMediaProfessional;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FashionSocialMediaProfessionalSeeder extends Seeder
{

    public function run(): void
    {
        FashionSocialMediaProfessional::factory(10)->create();
    }
}
