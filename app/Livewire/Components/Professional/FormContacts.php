<?php

namespace App\Livewire\Components\Professional;

use Livewire\Component;
use App\Helpers\MyNumbers;
use App\Helpers\MyStrings;
use App\Traits\AlertsTrait;
use App\Enums\RegistrationType;
use App\Models\FashionProfessional;
use App\Models\FashionPhonesProfessional;

class FormContacts extends Component
{
    use AlertsTrait;

    protected array $rules = [
        "phone_number" => "required",
        "phone_type" => "required",
    ];

    protected array $messages = [
        "phone_number.required" => "Número de telefone é obrigatório",
        "phone_type.required" => "Selecione o tipo",
    ];

    public $professional;
    public array $phones = [];
    public string $professional_id = "";
    public $phone_type = [];
    public string $phone_number = "";
    public bool $is_main = false;

    public function mount()
    {
        $this->professional_id = $this->professional->id;
    }

    public function render()
    {
        $this->phonesForCompany();

        return view("livewire.components.professional.form-contacts");
    }

    public function save()
    {
        $this->validate();
        $this->phone_number = MyStrings::sanitize($this->phone_number);
        $this->phone_type =
            $this->phone_type === "" ? "CELULAR" : $this->phone_type;
        $this->is_main = $this->is_main ? true : false;

        $this->verifyIfPhoneIsMain();

        FashionPhonesProfessional::updateOrCreate(
            [
                "phone_number" => $this->phone_number,
            ],
            [
                "fashion_professional_id" => $this->professional_id,
                "phone_type" => $this->phone_type,
                "is_main" => $this->is_main,
            ]
        );

        $this->showAlert(
            "success",
            "Telefone!",
            "Telefone adicionado com sucesso"
        );

        $this->render();

        $this->reset("phone_type", "phone_number", "is_main");
    }

    public function edit(string $id)
    {
        $phone = FashionPhonesProfessional::find($id);

        $this->phone_type = $phone->phone_type;
        $this->phone_number = MyNumbers::formatPhoneNumber(
            $phone->phone_number
        );
        $this->is_main = $phone->is_main;
    }

    public function remove(string $id)
    {
        $phone = FashionPhonesProfessional::find($id);
        $phone?->delete();

        $this->render();

        $this->showAlert(
            "success",
            "Telefone!",
            "Telefone excluído com sucesso"
        );
    }

    protected function phonesForCompany()
    {
        $this->professional = FashionProfessional::where(
            "id",
            $this->professional_id
        )->first();
        $this->phones = $this->professional->phones->toArray();
    }

    protected function verifyIfPhoneIsMain()
    {
        $phones = $this->professional->phones;

        foreach ($phones as $phone) {
            if ($phone["is_main"] === 1) {
                $phone["is_main"] = false;
                $phone->save();
            }
        }
    }
}
