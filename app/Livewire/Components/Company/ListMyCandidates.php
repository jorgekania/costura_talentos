<?php

namespace App\Livewire\Components\Company;

use Livewire\Component;
use App\Traits\AlertsTrait;
use App\Models\FashionCompany;
use App\Models\FashionProfessional;
use App\Models\FashionProfessionalApplied;
use App\Models\FashionVacancy;

class ListMyCandidates extends Component
{
    use AlertsTrait;

    public ?FashionCompany $company;
    public ?FashionProfessional $professional;
    public ?FashionProfessionalApplied $professional_applied;
    public $vacancies;
    public $specializations;

    public function mount()
    {
        $this->vacancies = FashionVacancy::where(
            "fashion_company_id",
            $this->company->id
        )
            ->with(["specialization", "appliedProfessionals"])
            ->get();
    }

    public function render()
    {
        return view("livewire.components.company.list-my-candidates");
    }
}
