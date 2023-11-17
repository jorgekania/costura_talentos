<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Filters\ApplyFilters;
use App\Models\FashionVacancy;
use App\Filters\FiltersVacancies;

class FashionVacanciesController extends Controller
{
    public $filters;
    public $vacancies;
    public $applyFilters;

    public function __construct()
    {
        $this->filters = new FiltersVacancies();
        $this->vacancies = FashionVacancy::query();
        $this->applyFilters = new ApplyFilters();
    }

    public function index()
    {
        $this->vacancies = $this->vacancies
            ->where("is_active", 1)
            ->with(["company", "specialization"])
            ->orderBy("created_at", "desc");

        $vacanciesAll = $this->vacancies->get();
        $vacanciesPaginate = $this->vacancies->paginate(5);
        $selectedFilters = $this->applyFilters->setNullSelectedFilters();

        return view("vacancies.index", [
            "vacancies" => $vacanciesPaginate,
            "filters" => [
                "filterSpecialization" => $this->filters->filterSpecialization(),
                "filterCity" => $this->filters->filterCity($vacanciesAll),
                "filterIndustrialMachines" => $this->filters->filterIndustrialMachines(),
                "filterHiringRegime" => $this->filters->filterHiringRegime(),
                "filterFormOfRemuneration" => $this->filters->filterFormOfRemuneration(),
                "remunerationValueMin" => $this->filters->filterRemunerationValueMin(),
                "remunerationValueMax" => $this->filters->filterRemunerationValueMax(),
            ],
            "selectedFilters" => $selectedFilters,
        ]);
    }

    public function vacancy($_, string $id): View
    {
        $vacancy = FashionVacancy::with(["company", "specialization", "industrialMachines"])->where('id',$id)->first();
        $otherVacancies = FashionVacancy::where("id", "<>", $id)
            ->orderBy("created_at", "desc")
            ->limit(5)
            ->get();

        return view("vacancies.vacancy", [
            "vacancy" => $vacancy,
            "otherVacancies" => $otherVacancies,
        ]);
    }

    public function filterVacancies(Request $request)
    {
        return $this->applyFilters->applyFilters($request);
    }
}
