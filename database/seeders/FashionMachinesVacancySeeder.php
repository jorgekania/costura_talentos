<?php

namespace Database\Seeders;

use App\Models\FashionMachinesVacancy;
use Illuminate\Database\Seeder;

class FashionMachinesVacancySeeder extends Seeder
{

    public function run(): void
    {
        FashionMachinesVacancy::factory(10)->create();
    }
}
