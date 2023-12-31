<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\FashionCompany;
use App\Models\FashionSegment;
use Illuminate\Database\Seeder;

class FashionCompaniesSegmentSeeder extends Seeder
{
    public function run(): void
    {
        $companies = FashionCompany::all();
        $segments = FashionSegment::all();

        $companies->each(function ($company) use ($segments) {
            $numSegments = rand(1, 5);

            $randomSegments = $segments->shuffle()->take($numSegments);

            $randomSegments->each(function ($segment) use ($company) {
                $company->segments()->attach($segment->id, ['is_active' => true]);
            });
        });
    }
}
