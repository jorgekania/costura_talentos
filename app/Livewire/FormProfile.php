<?php

namespace App\Livewire;

use Exception;
use Livewire\Component;
use App\Helpers\MyStrings;
use App\Traits\AlertsTrait;
use App\Helpers\SearchZipCode;
use App\Models\FashionCompany;

class FormProfile extends Component
{
    use AlertsTrait;

    protected array $rules = [
        "corporate_reason" => "required|string|min:5",
        "email" => "required|email:filter",
        "website" => "url:http,https",
        "description" => "required|min:20",
        "zip_code" => "required|min:8|max:8",
        "address" => "required",
        "number" => "required",
        "neighborhood" => "required",
        "city" => "required",
        "state" => "required",
    ];

    protected array $messages = [
        "corporate_reason.required" => "Deve ser informado o nome da empresa",
        "corporate_reason.string" => "O nome da empresa não é válido",
        "corporate_reason.min" =>
            "O nome da empresa deve ter no mínimo 5 caracteres",

        "email.required" => "O email é obrigatório",
        "email.email" => "O email não é válido",

        "website.url" => "A URL do site não é válida. Deve iniciar com http ou https",

        "description.required" => "Digite uma descrição para empresa",
        "description.min" => "A descrição deve ter no mínimo 20 caracteres",

        "zip_code.required" => "O CEp é obrigatório",
        "zip_code.min" => "O CEP deve ter no mínimo 8 caracteres",
        "zip_code.max" => "O CEP deve ter no máximo 8 caracteres",

        "address.required" => "O endereço é obrigatório",

        "number.required" => "O número da empresa é obrigatório",

        "neighborhood.required" => "O bairro é obrigatório",
        "city.required" => "A cidade é obrigatório",
        "state.required" => "O estado é obrigatório",
    ];

    public $company;
    public $corporate_reason;
    public $email;
    public $company_size;
    public $website;
    public $description;
    public $description_no_format;
    public $zip_code;
    public $address;
    public $number;
    public $complement;
    public $neighborhood;
    public $city;
    public $state;

    public function mount($company = null)
    {
        $this->company = $company;
        $this->corporate_reason = $company->corporate_reason;
        $this->email = $company->email;
        $this->company_size = $company->company_size;
        $this->website = $company->website;
        $this->description = $company->description;
        $this->zip_code = MyStrings::sanitize($company->zip_code);
        $this->address = $company->address;
        $this->number = $company->number;
        $this->complement = $company->complement;
        $this->neighborhood = $company->neighborhood;
        $this->city = $company->city;
        $this->state = $company->short_state;
    }

    public function render()
    {
        $this->setTinyMCE();
        return view("livewire.form-profile");
    }

    public function editProfile()
    {
        $this->zip_code = MyStrings::sanitize($this->zip_code);
        $this->validate();

        // dd($this->description);


        try {
            $edit = FashionCompany::find($this->company->id);

            $edit->corporate_reason = $this->corporate_reason;
            $edit->email = $this->email;
            $edit->company_size = $this->company_size;
            $edit->website = $this->website;
            $edit->description = $this->description;
            $edit->zip_code = $this->zip_code;
            $edit->address = $this->address;
            $edit->number = $this->number;
            $edit->complement = $this->complement;
            $edit->neighborhood = $this->neighborhood;
            $edit->city = $this->city;
            $edit->short_state = $this->state;
            $edit->long_state = $this->getLongState($this->state);
            $edit->save();

            $this->showAlert(
                "success",
                "Editar perfil!",
                "Perfil editado com sucesso"
            );

            // $this->render();

        } catch (Exception $e) {
            $this->showAlert("error", "Editar perfil!", $e->getMessage());
            return;
        }
    }

    public function searchZipCode()
    {
        $this->zip_code = MyStrings::sanitize($this->zip_code);
        $searchZipCode = new SearchZipCode($this->zip_code);
        $data = $searchZipCode->search();

        $this->validate();

        if (!$data) {
            $this->showAlert("error", "Busca por CEP", "Erro ao buscar CEP!");
            return;
        }

        $this->zip_code = $data["cep"];
        $this->address = $data["logradouro"];
        $this->complement = $data["complemento"];
        $this->neighborhood = $data["bairro"];
        $this->city = $data["localidade"];
        $this->state = $data["uf"];

        $this->showAlert("success", "Busca por CEP", "CEP localizado!");

        // $this->render();
    }

    private function getLongState($shortState)
    {
        $stateMapping = [
            "AC" => "Acre",
            "AL" => "Alagoas",
            "AP" => "Amapá",
            "AM" => "Amazonas",
            "BA" => "Bahia",
            "CE" => "Ceará",
            "DF" => "Distrito",
            "ES" => "Espírito",
            "GO" => "Goiás",
            "MA" => "Maranhão",
            "MT" => "Mato",
            "MS" => "Mato",
            "MG" => "Minas",
            "PA" => "Pará",
            "PB" => "Paraíba",
            "PR" => "Paraná",
            "PE" => "Pernambuco",
            "PI" => "Piauí",
            "RJ" => "Rio",
            "RN" => "Rio",
            "RS" => "Rio",
            "RO" => "Rondônia",
            "RR" => "Roraima",
            "SC" => "Santa",
            "SP" => "São",
            "SE" => "Sergipe",
            "TO" => "Tocantins",
        ];

        return $stateMapping[$shortState] ?? "Desconhecido";
    }

    public function setTinyMCE()
    {
        $this->dispatch("renderTinymce", $this->company);
    }
}
