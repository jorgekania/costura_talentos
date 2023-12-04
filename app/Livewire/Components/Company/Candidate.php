<?php

namespace App\Livewire\Components\Company;

use App\Models\FashionProfessional;
use App\Models\FashionProfessionalSpecialization;
use Livewire\Component;

class Candidate extends Component
{
    public $professional;
    public $specialty;

    public function mount()
    {
        $professional_id = request()->candidate;

        $this->professional = FashionProfessional::where("id", $professional_id)
            ->with(["phones", "socialMedia", "academicEducation"])
            ->first();

        $this->specialty = FashionProfessionalSpecialization::find(
            $this->professional->specialty
        );
    }

    public function render()
    {
        return view("livewire.components.company.candidate");
    }
}
