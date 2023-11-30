<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\FashionSocialMediaCompany;
use Illuminate\Database\Seeder;

class FashionSocialMediaCompanySeeder extends Seeder
{
    public function run(): void
    {
        FashionSocialMediaCompany::factory(10)->create();
    }
}
