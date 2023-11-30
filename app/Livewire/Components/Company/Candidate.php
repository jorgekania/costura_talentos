<?php

namespace App\Livewire\Components\Company;

use App\Models\FashionProfessional;
use Livewire\Component;

class Candidate extends Component
{
    public  $professional;

    public function mount()
    {
        $professional_id = request()->candidate;

        $this->professional = FashionProfessional::where(
            "id",
            $professional_id
        )
            ->with(["phones", "socialMedia"])
            ->get();

            dd($this->professional);
    }

    public function render()
    {
        return view('livewire.components.company.candidate');
    }
}
