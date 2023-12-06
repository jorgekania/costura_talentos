<?php

namespace App\Livewire\Components\Company;

use Throwable;
use Livewire\Component;
use App\Traits\AlertsTrait;
use App\Mail\GenericPasswordMail;
use App\Helpers\PasswordGenerator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class FormUpdatePassword extends Component
{
    use AlertsTrait;

    protected array $rules = [
        "current_password" => "required",
        "new_password" => "required|min:6",
        "password_confirmation" => "required|same:new_password",
    ];

    protected array $messages = [
        "current_password.required" => "Digite a senha atual",
        "new_password.required" => "Digite a nova senha",
        "new_password.min" => "A nova senha deve ter no mínimo 5 caracteres",
        "password_confirmation.required" => "Confirme a nova senha",
        "password_confirmation.same" =>
            "A confirmação não conferee com a nova senha",
    ];

    public $company;
    public $company_id;
    public string $current_password;
    public string $new_password;
    public string $password_confirmation;
    public string $generic_password;

    public function mount()
    {
        $this->company_id = $this->company->id;
    }

    public function render()
    {
        return view("livewire.components.company.form-update-password");
    }

    public function save()
    {
        $this->validate();

        if (!$this->checkCurrentPassword()) {
            $this->showAlert(
                "error",
                "Atualização de senha",
                "A senha atual não confere!"
            );
            return;
        }

        $this->company->update([
            "password" => Hash::make($this->new_password),
        ]);

        $this->showAlert(
            "success",
            "Atualização de senha",
            "A senha atualizada com sucesso! Redirecionando..."
        );

        auth()
            ->guard("company")
            ->logout();

        $this->dispatch("redirectLogout");
    }

    public function generatePassword()
    {
        try {
            $this->generic_password = PasswordGenerator::generatePassword();

            $this->company->update([
                "password" => Hash::make($this->generic_password),
                "provider" => null,
            ]);

            $this->senMailPassword();

            $this->showAlert(
                "success",
                "Geração de Senha",
                "Senha provisória gerada com sucesso! Email enviado."
            );

            auth()
                ->guard("company")
                ->logout();

            $this->dispatch("redirectLogout");
        } catch (Throwable $e) {
            $this->showAlert("error", "Geração de Senha", $e->getMessage());
            return;
        }
    }

    public function checkCurrentPassword()
    {
        if (!Hash::check($this->current_password, $this->company->password)) {
            return false;
        }

        return true;
    }

    public function senMailPassword()
    {
        $content = [
            "title" => "Senha Costura Talentos",
            "body" =>
                "Você solicitou uma senha provisória para acesso direto ao site Costura Talentos. Sua senha provisória é:",
            "password" => $this->generic_password,
        ];

        Mail::to($this->company->email)->send(
            new GenericPasswordMail($content)
        );
    }
}
