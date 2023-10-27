<?php

namespace Database\Seeders;

use App\Models\FashionCompany;
use App\Models\FashionSegment;
use Illuminate\Database\Seeder;
use App\Models\FashionCompaniesSegment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FashionCompaniesSegmentSeeder extends Seeder
{

    public function run(): void
    {
        // FashionCompaniesSegment::factory(3)->create();

        $companies = FashionCompany::all();
        $segments = FashionSegment::all();

        $companies->each(function ($company) use ($segments) {
            // Gere um número aleatório entre 1 e 5 segmentos
            $numSegments = rand(1, 5);

            // Embaralhe os segmentos para obter uma seleção aleatória
            $randomSegments = $segments->shuffle()->take($numSegments);

            // Associe os segmentos à empresa
            $randomSegments->each(function ($segment) use ($company) {
                $company->segments()->attach($segment->id, ['is_active' => true]);
            });
        });
    }
}
