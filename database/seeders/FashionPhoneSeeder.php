<?php

namespace Database\Seeders;

use App\Models\FashionPhone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FashionPhoneSeeder extends Seeder
{

    public function run(): void
    {
        FashionPhone::factory(10)->create();
    }
}
