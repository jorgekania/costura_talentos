<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\FashionSocialMedia;
use Illuminate\Database\Seeder;

class FashionSocialMediaSeeder extends Seeder
{
    public function run(): void
    {
        FashionSocialMedia::factory(10)->create();
    }
}
