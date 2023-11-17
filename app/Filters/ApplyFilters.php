<?php

namespace App\Filters;

use Illuminate\Http\Request;
use App\Models\FashionVacancy;
use App\Filters\FiltersVacancies;
use Illuminate\Support\Facades\DB;

class ApplyFilters
{
    public $filters;
    public $vacancies;

    public function __construct()
    {
        $this->filters = new FiltersVacancies();
        $this->vacancies = FashionVacancy::query();
    }

    public function applyFilters(Request $request)
    {
        $this->vacancies = $this->vacancies
            ->where("is_active", 1)
            ->with(["company", "specialization"])
            ->orderBy("created_at", "desc");

        $this->applySpecializationFilter($request);
        $this->applyCityFilter($request);
        $this->applyIndustrialMachineFilter($request);
        $this->applyHiringRegimeFilter($request);
        $this->applyFormOfRemunerationFilter($request);
        $this->applyRemunerationValueFilter($request);

        $vacanciesAll = $this->vacancies->get();
        $vacanciesPaginate = $this->vacancies->paginate(5);
        $selectedFilters = $this->getSelectedFilters($request);

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

    protected function getSelectedFilters(Request $request)
    {
        $selectedFilters = [];

        $selectedFilters["professional-specializations"] = $request->input(
            "professional-specializations",
            "all"
        );
        $selectedFilters["filter-city"] = $request->input("filter-city", "all");
        $selectedFilters["filter-industrial-machine"] = $request->input(
            "filter-industrial-machine",
            ["all"]
        );
        $selectedFilters["hiring-regime"] = $request->input("hiring-regime");
        $selectedFilters["form-of-remuneration"] = $request->input(
            "form-of-remuneration"
        );
        $selectedFilters["remuneration-value-min"] = $request->input(
            "remuneration-value-min"
        );
        $selectedFilters["remuneration-value-max"] = $request->input(
            "remuneration-value-max"
        );

        return $selectedFilters;
    }

    public function setNullSelectedFilters()
    {
        return [
            "professional-specializations" => null,
            "filter-city" => null,
            "filter-industrial-machine" => null,
            "hiring-regime" => null,
            "form-of-remuneration" => null,
            "remuneration-value-min" => null,
            "remuneration-value-max" => null,
        ];
    }

    protected function applySpecializationFilter(Request $request)
    {
        $specialization = $request->input("professional-specializations");

        if ($specialization && $specialization !== "all") {
            $this->vacancies->whereHas("specialization", function ($query) use (
                $specialization
            ) {
                $query->where("id", $specialization);
            });
        }
    }

    protected function applyCityFilter(Request $request)
    {
        $city = $request->input("filter-city");

        if ($city && $city !== "all") {
            $this->vacancies->whereHas("company", function ($query) use (
                $city
            ) {
                $query->where(DB::raw("CONCAT(city, '/', short_state)"), $city);
            });
        }
    }

    protected function applyIndustrialMachineFilter(Request $request)
    {
        if (!$request->offsetExists("filter-industrial-machine")) {
            return;
        }

        $industrialMachines = $request->input("filter-industrial-machine");

        if (in_array("all", $industrialMachines)) {
            return;
        }

        $this->vacancies->whereHas("industrialMachines", function ($query) use (
            $industrialMachines
        ) {
            $query->whereIn("industrial_machines_id", $industrialMachines);
        });
    }

    protected function applyHiringRegimeFilter(Request $request)
    {
        $hiringRegime = $request->input("hiring-regime");

        if (!$hiringRegime) {
            return;
        }

        $this->vacancies->whereIn("hiring_regime", $hiringRegime);
    }

    protected function applyFormOfRemunerationFilter(Request $request)
    {
        $formOfRemuneration = $request->input("form-of-remuneration");

        if (!$formOfRemuneration) {
            return;
        }

        $this->vacancies->whereIn("work_where", $formOfRemuneration);
    }

    protected function applyRemunerationValueFilter(Request $request)
    {
        $remunerationValueMin = $request->input("remuneration-value-min");
        $remunerationValueMin = intval($remunerationValueMin);

        if ($remunerationValueMin <= 0) {
            return;
        }

        $this->vacancies->where(
            "remuneration_value",
            ">=",
            $remunerationValueMin
        );
    }
}
