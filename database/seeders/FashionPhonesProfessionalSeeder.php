<?php

namespace Database\Seeders;

use App\Models\FashionPhonesProfessional;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FashionPhonesProfessionalSeeder extends Seeder
{

    public function run(): void
    {
        FashionPhonesProfessional::factory(20)->create();
    }
}
