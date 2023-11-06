<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\FashionProfessionalApplied;
use Illuminate\Database\Seeder;

class FashionProfessionalAppliedSeeder extends Seeder
{
    public function run(): void
    {
        FashionProfessionalApplied::factory(50)->create();
    }
}
