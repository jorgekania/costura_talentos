<?php

namespace App\Livewire;

use Livewire\Component;
use App\Helpers\MyStrings;
use App\Traits\AlertsTrait;
use App\Helpers\SearchZipCode;

class SearchAddress extends Component
{
    use AlertsTrait;

    protected array $rules = [
        "zip_code" => "required|min:8|max:8",
        "address" => "required",
        "number" => "required",
        "neighborhood" => "required",
        "city" => "required",
        "state" => "required",
    ];

    protected array $messages = [
        "zip_code.required" => "O CEP é obrigatório",
        "zip_code.min" => "O CEP deve ter no mínimo 8 caracteres",
        "zip_code.max" => "O CEP deve ter no máximo 8 caracteres",

        "address.required" => "O endereço é obrigatório",

        "number.required" => "O número da empresa é obrigatório",

        "neighborhood.required" => "O bairro é obrigatório",
        "city.required" => "A cidade é obrigatório",
        "state.required" => "O estado é obrigatório",
    ];

    public $zip_code;
    public $address;
    public $number;
    public $complement;
    public $neighborhood;
    public $city;
    public $state;

    public function mount($company)
    {
        $this->zip_code = $company->zip_code;
        $this->address = $company->address;
        $this->number = $company->number;
        $this->complement = $company->complement;
        $this->neighborhood = $company->neighborhood;
        $this->city = $company->city;
        $this->state = $company->short_state;
    }

    public function render()
    {
        return view('livewire.search-address');
    }

    public function searchZipCode()
    {
        $this->validate();

        $sanitizeZipConde = MyStrings::sanitize($this->zip_code);
        $searchZipCode = new SearchZipCode($sanitizeZipConde);
        $data = $searchZipCode->search();

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

        $this->render();
    }
}
