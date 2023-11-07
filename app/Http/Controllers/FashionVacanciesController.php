<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\FashionProfessionalSpecialization;
use App\Models\FashionVacancy;

class FashionVacanciesController extends Controller
{
    public function index(string $specialization = null)
    {

        $vacancies = FashionVacancy::where('is_active', 1)->with(['company', 'specialization'])->orderBy('created_at', 'desc');

        if (is_null($specialization)) {
            $vacanciesAll = $vacancies->get();
            $vacanciesPaginate = $vacancies->paginate(5);
            $loadFilterCity = $vacancies ? $this->loadFilterCity($vacanciesAll) : null;

            return view('vacancies.index', [
                'vacancies' => $vacanciesPaginate,
                'loadFilterCity' => $loadFilterCity,
            ]);
        }

        $specializationId = FashionProfessionalSpecialization::where('specialization_slug', $specialization)->first();
        $vacanciesAll = $vacancies->where('specializations_id', $specializationId->id)->get();
        $vacanciesPaginate = $vacancies->where('specializations_id', $specializationId->id)->paginate(5);
        $loadFilterCity = $vacancies ? $this->loadFilterCity($vacanciesAll) : null;

        return view('vacancies.index', [
            'vacancies' => $vacanciesPaginate,
            'loadFilterCity' => $loadFilterCity,
        ]);
    }


    public function vacancy(string $id)
    {
        $vacancy = FashionVacancy::find($id);

        return view('vacancies.vacancy', ['vacancy' => $vacancy]);
    }

    public function loadFilterCity($vacancies)
    {
        $citiesAndState = [];

        foreach ($vacancies as $vacancy) {
            $citiesAndState[] = $vacancy->company->city . '/' . $vacancy->company->short_state;
        }

        usort($citiesAndState, function ($a, $b) {
            return strcmp($a, $b);
        });

        return array_unique($citiesAndState);
    }
}
