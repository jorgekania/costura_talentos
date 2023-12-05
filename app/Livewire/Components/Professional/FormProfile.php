<?php

namespace App\Livewire\Components\Professional;

use Exception;
use Livewire\Component;
use App\Helpers\MyStrings;
use App\Traits\AlertsTrait;
use App\Helpers\SearchZipCode;
use App\Traits\GetLongStateTrait;
use App\Models\FashionProfessional;

class FormProfile extends Component
{
    use AlertsTrait;
    use GetLongStateTrait;

    protected array $rules = [
        "name" => "required|string|min:5",
        "email" => "required|email:filter",
        "bio" => "required|max:255|min:25",
        "zip_code" => "required",
        "address" => "nullable",
        "number" => "nullable",
        "neighborhood" => "nullable",
        "city" => "nullable",
        "state" => "nullable",
    ];

    protected array $messages = [
        "name.required" => "Deve ser informado o nome da empresa",
        "name.string" => "O nome da empresa não é válido",
        "name.min" => "O nome da empresa deve ter no mínimo 5 caracteres",

        "email.required" => "O email é obrigatório",
        "email.email" => "O email não é válido",

        "bio.required" => "Digite algo sobre você",
        "bio.min" => "Sua biografia deve ter no mínimo 25 caracteres",
        "bio.max" => "Sua biografia deve ser breve. No máximo 255 caracteres",

        "zip_code.required" => "O CEP é obrigatório",

        "address.nullable" => "O endereço é obrigatório",

        "number.nullable" => "O número da empresa é obrigatório",

        "neighborhood.nullable" => "O bairro é obrigatório",
        "city.nullable" => "A cidade é obrigatório",
        "state.nullable" => "O estado é obrigatório",
    ];

    public $professional;
    public $name;
    public $bio;
    public $email;
    public $zip_code;
    public $address;
    public $number;
    public $complement;
    public $neighborhood;
    public $city;
    public $state;

    public function mount($professional = null)
    {
        $this->professional = $professional;
        $this->name = $professional->name;
        $this->bio = $professional->bio;
        $this->email = $professional->email;
        $this->zip_code = MyStrings::sanitize($professional->zip_code ?? "");
        $this->address = $professional->address;
        $this->number = $professional->number;
        $this->complement = $professional->complement;
        $this->neighborhood = $professional->neighborhood;
        $this->city = $professional->city;
        $this->state = $professional->short_state;
    }

    public function render()
    {
        $this->setTinyMCE();
        return view("livewire.components.professional.form-profile");
    }

    public function editProfile()
    {
        $this->validate();
        $this->zip_code = MyStrings::sanitize($this->zip_code);

        try {
            $edit = FashionProfessional::find($this->professional->id);

            $edit->name = $this->name;
            $edit->email = $this->email;
            $edit->bio = $this->bio;
            $edit->zip_code = $this->zip_code;
            $edit->address = $this->address;
            $edit->number = $this->number;
            $edit->complement = $this->complement;
            $edit->neighborhood = $this->neighborhood;
            $edit->city = $this->city;
            $edit->short_state = $this->state;
            $edit->long_state = $this->get($this->state);
            $edit->save();

            $this->showAlert(
                "success",
                "Editar perfil!",
                "Perfil editado com sucesso"
            );
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
            $this->showAlert("error", "Busca por CEP", "CEP não encontrado!");
            return;
        }

        $this->zip_code = $data["cep"];
        $this->address = $data["logradouro"];
        $this->complement = $data["complemento"];
        $this->neighborhood = $data["bairro"];
        $this->city = $data["localidade"];
        $this->state = $data["uf"];

        $this->showAlert("success", "Busca por CEP", "CEP localizado!");
    }

    public function setTinyMCE()
    {
        $this->dispatch("renderTinymce");
    }
}
