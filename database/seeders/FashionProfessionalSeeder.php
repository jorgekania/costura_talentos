<?php

namespace Database\Seeders;

use App\Models\FashionProfessional;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FashionProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        FashionProfessional::factory(10)->create();
    }
}
