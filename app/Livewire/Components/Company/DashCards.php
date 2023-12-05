<?php

namespace App\Livewire\Components\Company;

use App\Models\FashionProfessionalApplied;
use App\Models\FashionVacancy;
use Livewire\Component;

class DashCards extends Component
{
    public $company;
    public $availableVacancies;
    public $activeVacancies;
    public $appliedCandidates;
    public $viewed;
    public $vacancies;

    public function mount()
    {
        $this->availableVacancies = $this->getVacancies()->count();
        $this->activeVacancies = $this->getVacancies()->count();
        $this->vacancies = $this->getVacancies()->pluck("id");
        $this->viewed = $this->getVacancies()->sum("viewed");
        $this->getAppliedCandidates();
    }

    public function render()
    {
        return view("livewire.components.company.dash-cards");
    }

    protected function getVacancies()
    {
        return FashionVacancy::where("fashion_company_id", $this->company->id);
    }

    protected function getAppliedCandidates()
    {
        $this->appliedCandidates = FashionProfessionalApplied::whereIn(
            "fashion_vacancies_id",
            $this->vacancies
        )->count();
    }
}
