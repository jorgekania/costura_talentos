<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\FashionProfessionalApplied;
use App\Models\FashionProfessionalSpecialization;
use App\Models\FashionVacancy;

class FashionVacanciesController extends Controller
{
    public function index($specialization = null)
    {

        $vacancies = FashionVacancy::where('is_active', 1)->with(['company', 'specialization']);

        if (is_null($specialization)) {
            return view('vacancies.index', ['vacancies' => $vacancies->get()]);
        }

        $specializationId = FashionProfessionalSpecialization::where('specialization_slug', $specialization)->first();
        $vacancies = $vacancies->where('specializations_id', $specializationId->id)->get();

        return view('vacancies.index', ['vacancies' => $vacancies]);
    }
}
