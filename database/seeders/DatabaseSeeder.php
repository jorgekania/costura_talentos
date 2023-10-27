<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call([
            FashionProfessionalSpecializationSeeder::class,
            FashionIndustrialMachinesSeeder::class,
            FashionSegmentSeeder::class,
            FashionProfessionalSeeder::class,
            FashionCompanySeeder::class,
            FashionCompaniesSegmentSeeder::class,
            FashionPhoneSeeder::class,
            FashionSocialMediaSeeder::class,
            FashionVacancySeeder::class,
            FashionMachinesVacancySeeder::class,
        ]);
    }
}
