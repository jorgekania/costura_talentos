<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\FashionProfessionalSpecialization;

class SearchBar extends Component
{
    public $specializations;
    public $selectedSpecialization;

    public function mount()
    {
        $this->specializations = FashionProfessionalSpecialization::orderBy('specialization', 'asc')->pluck('specialization', 'id');
        $this->selectedSpecialization = session('selectedSpecialization', 'all');
    }

    public function redirectToVacancies()
    {
        session(['selectedSpecialization' => $this->selectedSpecialization]);

        if ($this->selectedSpecialization === 'all') {
            return redirect()->route('vagas');
        } else {
            $specialization = $this->specializations[$this->selectedSpecialization];
            $routeName = 'vacancies';
            return redirect()->route($routeName, Str::slug($specialization));
        }
    }


    public function render()
    {
        return view('livewire.search-bar');
    }
}
