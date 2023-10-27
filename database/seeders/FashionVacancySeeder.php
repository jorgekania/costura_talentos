<?php

namespace Database\Seeders;

use App\Models\FashionVacancy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FashionVacancySeeder extends Seeder
{

    public function run(): void
    {
        FashionVacancy::factory(10)->create();
    }
}
