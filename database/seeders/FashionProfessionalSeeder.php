<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\FashionProfessional;
use Illuminate\Database\Seeder;

class FashionProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        FashionProfessional::factory(50)->create();
    }
}
