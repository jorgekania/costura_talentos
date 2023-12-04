<?php

namespace App\Livewire\Components;

use App\Models\FashionAcademicEducation;
use Livewire\Component;

class Searchbox extends Component
{
    public $showResult = false;
    public $search = "";
    public $records;
    public $empDetails;

    public function searchResult()
    {
        if (!empty($this->search)) {
            $this->records = FashionAcademicEducation::orderby(
                "formation",
                "asc"
            )
                ->select("*")
                ->where("formation", "like", "%" . $this->search . "%")
                ->limit(15)
                ->get();

            $this->showResult = true;
        } else {
            $this->showResult = false;
        }
    }

    public function fetchAcademicEduicationDetail($id = 0)
    {
        $record = FashionAcademicEducation::select("*")
            ->where("id", $id)
            ->first();

        $this->search = $record->formation;
        $this->empDetails = $record;
        $this->showResult = false;
    }

    public function render()
    {
        return view("livewire.components.searchbox");
    }
}
