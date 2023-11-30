<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\FashionPhonesCompany;
use Illuminate\Database\Seeder;

class FashionPhonesCompanySeeder extends Seeder
{
    public function run(): void
    {
        FashionPhonesCompany::factory(20)->create();
    }
}
