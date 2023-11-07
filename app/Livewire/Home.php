<?php

namespace App\Livewire;

use App\Models\FashionVacancy;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Home extends Component
{
    public Collection $latestVacancies;

    public function mount()
    {
        $this->latestVacancies = FashionVacancy::where('is_active', 1)
            ->with(['company', 'specialization'])
            ->orderBy('created_at', 'desc')
            ->limit(4)
            ->get();
    }

    public function render()
    {
        return view('livewire.home');
    }
}
