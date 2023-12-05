<?php

namespace App\Livewire\Components\Company;

use Livewire\Component;
use App\Traits\AlertsTrait;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class FormUploadLogo extends Component
{
    use AlertsTrait;
    use WithFileUploads;

    protected array $rules = [
        "logo" => "required|image|max:1024|mimes:png,jpg,jpeg",
    ];

    protected array $messages = [
        "logo.required" => "Você deve selecionar uma imagem",
        "logo.image" => "Arquivo não é do tipo imagem",
        "logo.max" => "Peso máximo da imagem é de 1024 kb",
        "logo.mimes" => "Só é aceito arquivos do tipo png,jpg ou jpeg",
    ];

    public $company;
    public $company_id;
    public $logo;

    public function mount()
    {
        $this->company_id = $this->company->id;
    }

    public function render()
    {
        return view("livewire.components.company.form-upload-logo");
    }

    public function uploadLogo(string $id)
    {
        $this->validate();

        $fileName = $id . "." . $this->logo->getClientOriginalExtension();
        $path = $this->logo->storeAs("public/company_logos", $fileName);

        if ($path) {
            $path = Str::replace("public/", "", $path);

            $this->company->update([
                "logo" => $path,
            ]);

            $this->showAlert("success", "Logo!", "Logo atualizada com sucesso");
        }
    }
}
