<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\FashionPhone;
use Illuminate\Database\Seeder;

class FashionPhoneSeeder extends Seeder
{
    public function run(): void
    {
        FashionPhone::factory(10)->create();
    }
}
