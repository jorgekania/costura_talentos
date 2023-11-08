<?php

namespace App\Livewire;

use Illuminate\Support\Facades\URL;
use Livewire\Component;

class FilterByCity extends Component
{
    public $city;
    public $selectedCity;
    public $loadFilterCity;

    public function mount()
    {
        $this->city = session('selectedCity', 'all');
    }

    public function cityFiltered()
    {

        $segment  =  URL::full();
        dd($segment);

        dd($this->selectedCity);
    }


    public function render()
    {
        return view('livewire.filter-by-city');
    }
}
