<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\FashionProfessionalApplied;
use App\Models\FashionProfessionalSpecialization;
use App\Models\FashionVacancy;

class FashionVacanciesController extends Controller
{
    public function index(string $specialization = null)
    {

        $vacancies = FashionVacancy::where('is_active', 1)->with(['company', 'specialization'])->orderBy('created_at', 'desc');

        if (is_null($specialization)) {
            return view('vacancies.index', ['vacancies' => $vacancies->paginate(5)]);
        }

        $specializationId = FashionProfessionalSpecialization::where('specialization_slug', $specialization)->first();
        $vacancies = $vacancies->where('specializations_id', $specializationId->id)->paginate(5);

        return view('vacancies.index', ['vacancies' => $vacancies]);
    }


    public function vacancy(string $title, string $id)
    {
        $vacancy = FashionVacancy::find($id);

        return view('vacancies.vacancy', ['vacancy' => $vacancy]);
    }
}
