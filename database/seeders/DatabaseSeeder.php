<?php

declare(strict_types=1);

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\FashionProfessionalAcademicEducation;
use App\Models\FashionProfessionalExperience;
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
            FashionCountrySeeder::class,
            FashionAcademicEducationSeeder::class,
            FashionProfessionalAcademicEducationSeeder::class,
            FashionSkillsProfessionalSeeder::class,
            FashionProfessionalExperienceSeeder::class,
        ]);
    }
}
