<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\FashionCompany;
use Illuminate\Database\Seeder;

class FashionCompanySeeder extends Seeder
{
    public function run(): void
    {
        FashionCompany::factory(50)->create();
    }
}
