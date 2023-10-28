<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\FashionVacancy;
use Illuminate\Database\Seeder;

class FashionVacancySeeder extends Seeder
{
    public function run(): void
    {
        FashionVacancy::factory(10)->create();
    }
}
