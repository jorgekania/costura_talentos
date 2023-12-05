<?php

namespace App\Livewire\Components\Professional;

use Livewire\Component;
use App\Traits\AlertsTrait;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class FormUploadAvatar extends Component
{
    use AlertsTrait;
    use WithFileUploads;

    protected array $rules = [
        "avatar" => "required|image|max:1024|mimes:png,jpg,jpeg",
    ];

    protected array $messages = [
        "avatar.required" => "Você deve selecionar uma imagem",
        "avatar.image" => "Arquivo não é do tipo imagem",
        "avatar.max" => "Peso máximo da imagem é de 1024 kb",
        "avatar.mimes" => "Só é aceito arquivos do tipo png,jpg ou jpeg",
    ];

    public $professional;
    public $professional_id;
    public $avatar;

    public function mount()
    {
        $this->professional_id = $this->professional->id;
    }

    public function render()
    {
        return view("livewire.components.professional.form-upload-avatar");
    }

    public function uploadAvatar(string $id)
    {
        $this->validate();

        $fileName = $id . "." . $this->avatar->getClientOriginalExtension();
        $path = $this->avatar->storeAs(
            "public/professional_avatars",
            $fileName
        );

        if ($path) {
            $path = Str::replace("public/", "", $path);

            $this->professional->update([
                "avatar" => $path,
            ]);

            $this->showAlert(
                "success",
                "Avatar!",
                "Avatar atualizado com sucesso"
            );
        }
    }
}
