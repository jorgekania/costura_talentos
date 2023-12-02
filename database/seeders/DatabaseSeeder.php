<?php

declare(strict_types=1);

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\FashionProfessionalAcademicEducation;
use Illuminate\Database\Seeder;
use Database\Seeders\FashionPhonesCompanySeeder;

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
            FashionPhonesCompanySeeder::class,
            FashionPhonesProfessionalSeeder::class,
            FashionSocialMediaCompanySeeder::class,
            FashionSocialMediaProfessionalSeeder::class,
            FashionVacancySeeder::class,
            FashionMachinesVacancySeeder::class,
            FashionProfessionalAppliedSeeder::class,
            FashionSkillSeeder::class,
            FashionAcademicEducationSeeder::class,
            FashionProfessionalAcademicEducationSeeder::class,
            FashionSkillsProfessionalSeeder::class,
        ]);
    }
}
