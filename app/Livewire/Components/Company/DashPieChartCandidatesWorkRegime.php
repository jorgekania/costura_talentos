<?php

namespace App\Livewire\Components\Company;

use Livewire\Component;
use App\Models\FashionProfessional;
use Asantibanez\LivewireCharts\Facades\LivewireCharts;

class DashPieChartCandidatesWorkRegime extends Component
{
    public $firstRun = true;
    public $showDataLabels = true;

    public function render()
    {
        $professional = FashionProfessional::all();

        $pieChartModel = $professional->groupBy("hiring_regime")->reduce(
            function ($pieChartModel, $data) {
                $type = $data->first()->hiring_regime->value;
                $value = $data->count("hiring_regime");

                return $pieChartModel->addSlice($type, $value, "");
            },
            LivewireCharts::pieChartModel()
                ->setAnimated($this->firstRun)

                ->setType("pie")
                ->withoutLegend()
                ->legendPositionBottom()
                ->legendHorizontallyAlignedCenter()
                ->setDataLabelsEnabled($this->showDataLabels)
                ->setColors([
                    "#f6ad55",
                    "#fc8181",
                    "#90cdf4",
                    "#66DA26",
                    "#cbd5e0",
                    "#9bd5e0",
                    "#cbb5e0",
                    "#cbe5e0",
                    "#c6DA26",
                    "#f6DA26",
                ])
        );

        $this->firstRun = false;

        return view(
            "livewire.components.company.dash-pie-chart-candidates-work-regime"
        )->with(["pieChartModel" => $pieChartModel]);
    }
}
