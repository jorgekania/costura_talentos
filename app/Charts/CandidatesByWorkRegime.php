<?php

namespace App\Charts;

use Illuminate\Support\Facades\DB;
use App\Models\FashionProfessional;

class CandidatesByWorkRegime
{
    public function mount()
    {
        $series = [];
        $labels = [];

        foreach ($this->getData() as $item) {
            $series[] = $item->total;
            $labels[] = $item->hiring_regime->value;
        }

        return ["series" => $series, "labels" => $labels];
    }

    private function getData()
    {
        return FashionProfessional::select(
            DB::raw("hiring_regime, count(*) as total")
        )
            ->groupBy("hiring_regime")
            ->orderBy("total", "desc")
            ->get();
    }
}
