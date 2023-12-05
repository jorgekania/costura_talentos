<?php

namespace App\Livewire\Components\Company;

use Livewire\Component;
use App\Models\FashionVacancy;
use App\Models\FashionProfessional;

class DashPossibileCandidates extends Component
{
    public $candidates;
    public $company;
    public $vacancies;
    public array $arrVacancies = [];

    public function mount()
    {
        $this->vacancies = $this->getVacacnies();

        foreach ($this->vacancies as $vancancy) {
            $this->arrVacancies[] = $vancancy->specializations_id;
        }

        $this->candidates = $this->getCandidates($this->arrVacancies);
    }

    public function render()
    {
        return view("livewire.components.company.dash-possibile-candidates");
    }

    protected function getVacacnies()
    {
        return FashionVacancy::where(
            "fashion_company_id",
            $this->company->id
        )->get();
    }

    protected function getCandidates(array $vacancies)
    {
        return FashionProfessional::whereIn("specialty", $vacancies)
            ->with(["specialization"])
            ->get();
    }
}
