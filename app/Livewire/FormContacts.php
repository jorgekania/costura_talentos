<?php

namespace App\Livewire;

use App\Helpers\MyNumbers;
use Livewire\Component;
use App\Helpers\MyStrings;
use App\Traits\AlertsTrait;
use App\Models\FashionPhone;
use App\Models\FashionCompany;
use Dotenv\Util\Str;
use PhpParser\Node\Expr\Cast\Bool_;

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

    public $company;
    public array $phones = [];
    public string $company_id = "";
    public $phone_type = [];
    public string $phone_number = "";
    public bool $is_main = false;

    public function mount()
    {
        $this->company_id = $this->company->id;
    }

    public function render()
    {
        $this->phonesForCompany();

        return view("livewire.form-contacts");
    }

    public function save()
    {
        $this->validate();
        $this->phone_number = MyStrings::sanitize($this->phone_number);
        $this->phone_type =
            $this->phone_type === "" ? "CELULAR" : $this->phone_type;
        $this->is_main = $this->is_main ? true : false;

        $this->verifyIfPhoneIsMain();

        FashionPhone::updateOrCreate(
            [
                "phone_number" => $this->phone_number,
            ],
            [
                "fashion_company_id" => $this->company_id,
                "professional_or_company" => "PROFESSIONAL",
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
        $phone = FashionPhone::find($id);

        $this->phone_type = $phone->phone_type;
        $this->phone_number = MyNumbers::formatPhoneNumber(
            $phone->phone_number
        );
        $this->is_main = $phone->is_main;
    }

    public function remove(string $id)
    {
        $phone = FashionPhone::find($id);
        $phone?->delete();

        $this->render();

        $this->showAlert("success", "Telefone!", "Telefone com sucesso");
    }

    protected function phonesForCompany(){
        $this->company = FashionCompany::where(
            "id",
            $this->company_id
        )->first();
        $this->phones = $this->company->phones->toArray();
    }

    protected function verifyIfPhoneIsMain()
    {
        $phones =$this->company->phones;

        foreach ($phones as $phone) {

            if($phone['is_main'] === 1) {
                $phone['is_main'] = false;
                $phone->save();
            }
        }
    }
}
