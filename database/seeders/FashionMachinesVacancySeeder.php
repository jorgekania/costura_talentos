<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\FashionMachinesVacancy;
use Illuminate\Database\Seeder;

class FashionMachinesVacancySeeder extends Seeder
{
    public function run(): void
    {
        FashionMachinesVacancy::factory(50)->create();
    }
}
