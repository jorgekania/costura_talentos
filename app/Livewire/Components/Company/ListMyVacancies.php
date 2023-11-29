<?php

namespace App\Livewire\Components\Company;

use App\Models\FashionCompany;
use App\Models\FashionProfessionalSpecialization;
use App\Models\FashionVacancy;
use Livewire\Component;
use App\Traits\AlertsTrait;
use Illuminate\Database\Eloquent\Collection;

class ListMyVacancies extends Component
{
    use AlertsTrait;

    public ?FashionCompany $company;
    public ?Collection $vacancies;
    public $specializations;

    public function mount()
    {
        $this->vacancies = FashionVacancy::where(
            "fashion_company_id",
            $this->company->id
        )
            ->with("specialization")
            ->get();
    }

    public function render()
    {
        return view("livewire.components.company.list-my-vacancies");
    }


}
