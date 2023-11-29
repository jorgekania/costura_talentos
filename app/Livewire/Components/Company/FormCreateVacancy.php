<?php

namespace App\Livewire\Components\Company;

use Livewire\Component;
use App\Enums\HiringRegime;
use App\Traits\AlertsTrait;
use App\Models\FashionCompany;
use App\Models\FashionVacancy;
use Livewire\Attributes\Layout;
use App\Enums\FormOfRemuneration;

use App\Models\FashionIndustrialMachines;
use App\Models\FashionMachinesVacancy;
use Illuminate\Database\Eloquent\Collection;
use App\Models\FashionProfessionalSpecialization;
use League\CommonMark\Extension\CommonMark\Node\Inline\Strong;

class FormCreateVacancy extends Component
{
    use AlertsTrait;

    protected array $rules = [
        "title" => "required|string|min:5",
        "specialization" => "required",
        "time_experience" => "nullable|integer",
        "work_where" => "required",
        "remuneration_value" => "nullable",
        "hiring_regime" => "required",
        "activities_and_responsibilities" => "required",
        "vacancy_requirements" => "required",
    ];

    protected array $messages = [
        "title.required" => "Deve ser informado um titulo para a vaga",
        "title.string" => "O titulo da vaga não é válido",
        "title.min" =>"O titulo da vaga deve ter no mínimo 5 caracteres",
        "specialization.required" => "Escolha uma especialização para a vaga",
        "time_experience.integer" =>"O tempo de experiencia deve ser umm valor inteiro",
        "work_where.required" => "Defina a forma de pagamento para a vaga",
        "hiring_regime.required" => "Informe o tipo de contrato",
        "activities_and_responsibilities.required" => "Informe as atividade e responsabilidades da vaga",
        "vacancy_requirements.required" => "Informe o que a vaga requer",
    ];

    public ?FashionCompany $company;
    public string $title;
    public ?Collection $specializations;
    public string $specialization;
    public int $time_experience;
    public $work_where;
    public $remuneration_value;
    public $hiring_regime;
    public string $activities_and_responsibilities;
    public string $vacancy_requirements;
    public string $the_company_offers;
    public ?Collection $machines;
    public array $machines_selected = [];

    public function mount()
    {
        $this->specializations = FashionProfessionalSpecialization::all();
        $this->machines = FashionIndustrialMachines::all();
    }

    #[Layout('layouts.app')]
    public function render()
    {
        $this->setTinyMCE();

        return view('livewire.components.company.form-create-vacancy');
    }

    public function save()
    {
        $this->validate();

        try {

            $create = FashionVacancy::create(
                [
                    "title" => $this->title,
                    "fashion_company_id" => $this->company->id,
                    "specializations_id" => $this->specialization,
                    "time_experience"=>$this->time_experience ?? 0,
                    "work_where"=>$this->work_where,
                    "remuneration_value"=>$this->remuneration_value,
                    "hiring_regime"=>$this->hiring_regime,
                    "activities_and_responsibilities"=>$this->activities_and_responsibilities,
                    "vacancy_requirements"=>$this->vacancy_requirements,
                    "the_company_offers"=>$this->the_company_offers ?? '',
                ]
            );

            if($create && count($this->machines_selected) > 0){
                $this->addMachinesInVacancy($create->id);
            }

            $this->showAlert(
                "success",
                "Nova Vaga!",
                "Nova vaga cadastrada com sucesso! Redirecionando..."
            );

            $this->dispatch("redirectVacancies");

        } catch (\Throwable $e) {

            $this->showAlert("error", "Nova Vaga", $e->getMessage());
            return;
        }
    }

    public function addMachinesInVacancy(string $vacancy_id)
    {

        foreach ($this->machines_selected as $machine) {

            $addMachines = new FashionMachinesVacancy();
            $addMachines->fashion_vacancies_id = $vacancy_id;
            $addMachines->industrial_machines_id = $machine;
            $addMachines->save();
        }

    }

    public function setTinyMCE()
    {
        $this->dispatch("renderTinymce", $this->company);
    }
}
