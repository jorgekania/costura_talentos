<?php

namespace App\Livewire\Components\Company;

use Livewire\Component;
use App\Traits\AlertsTrait;
use App\Models\FashionCompany;
use App\Models\FashionVacancy;
use App\Models\FashionMachinesVacancy;
use App\Models\FashionIndustrialMachines;
use Illuminate\Database\Eloquent\Collection;
use App\Models\FashionProfessionalSpecialization;

class FormEditVacancy extends Component
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
        "title.min" => "O titulo da vaga deve ter no mínimo 5 caracteres",
        "specialization.required" => "Escolha uma especialização para a vaga",
        "time_experience.integer" =>
            "O tempo de experiencia deve ser umm valor inteiro",
        "work_where.required" => "Defina a forma de pagamento para a vaga",
        "hiring_regime.required" => "Informe o tipo de contrato",
        "activities_and_responsibilities.required" =>
            "Informe as atividade e responsabilidades da vaga",
        "vacancy_requirements.required" => "Informe o que a vaga requer",
    ];

    public ?FashionVacancy $vacancy;
    public string $vacancy_id;
    public ?FashionCompany $company;
    public string $title;
    public ?Collection $specializations;
    public $specialization;
    public string $current_specialization;
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
        $this->vacancy_id = request()->vacancy;
        $this->vacancy = FashionVacancy::find($this->vacancy_id);

        $this->title = $this->vacancy->title;
        $this->specialization = $this->vacancy->specializations_id;
        $this->current_specialization = $this->vacancy->specializations_id;
        $this->time_experience = $this->vacancy->time_experience;
        $this->work_where = $this->vacancy->work_where;
        $this->remuneration_value = $this->vacancy->remuneration_value / 100;
        $this->hiring_regime = $this->vacancy->hiring_regime;
        $this->activities_and_responsibilities =
            $this->vacancy->activities_and_responsibilities;
        $this->vacancy_requirements = $this->vacancy->vacancy_requirements;
        $this->the_company_offers = $this->vacancy->the_company_offers;

        $this->specializations = FashionProfessionalSpecialization::all();
        $this->machines = FashionIndustrialMachines::all();
        $this->machines_selected = FashionMachinesVacancy::where(
            "fashion_vacancies_id",
            $this->vacancy_id
        )
            ->get()
            ->toArray();
    }

    public function render()
    {
        $this->setTinyMCE();
        return view("livewire.components.company.form-edit-vacancy");
    }

    public function edit(string $vacancy_id)
    {
        $this->validate();

        try {
            $edit_vacancy = FashionVacancy::find($vacancy_id);
            $edit_vacancy->title = $this->title;
            $edit_vacancy->specializations_id = $this->specialization;
            $edit_vacancy->time_experience = $this->time_experience;
            $edit_vacancy->work_where = $this->work_where;
            $edit_vacancy->remuneration_value = $this->remuneration_value;
            $edit_vacancy->hiring_regime = $this->hiring_regime;
            $edit_vacancy->activities_and_responsibilities =
                $this->activities_and_responsibilities;
            $edit_vacancy->vacancy_requirements = $this->vacancy_requirements;
            $edit_vacancy->the_company_offers = $this->the_company_offers;
            $edit_vacancy->save();

            $this->addMachinesInVacancy($edit_vacancy->id);

            $this->showAlert(
                "success",
                "Editar Vaga!",
                "Vaga editada com sucesso! Redirecionando..."
            );

            // $this->dispatch("redirectVacancies");
        } catch (\Throwable $e) {
            $this->showAlert("error", "Editar Vaga", $e->getMessage());
            return;
        }
    }

    public function addMachinesInVacancy(string $vacancy_id)
    {
        FashionMachinesVacancy::where(
            "fashion_vacancies_id",
            $vacancy_id
        )->delete();

        foreach ($this->machines_selected as $machine) {
            FashionMachinesVacancy::updateOrCreate(
                [
                    "fashion_vacancies_id" => $vacancy_id,
                    "industrial_machines_id" =>
                        $machine["industrial_machines_id"] ?? $machine,
                ],
                [
                    "industrial_machines_id" =>
                        $machine["industrial_machines_id"] ?? $machine,
                ]
            );
        }
    }

    public function setTinyMCE()
    {
        $this->dispatch("renderTinymce", $this->company);
    }
}
