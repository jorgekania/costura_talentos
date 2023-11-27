<?php

namespace App\Livewire;

use App\Enums\RegistrationType;
use Livewire\Component;
use App\Traits\AlertsTrait;
use App\Models\FashionCompany;
use App\Models\FashionSocialMedia;

class FormSocialMedia extends Component
{
    use AlertsTrait;

    protected array $rules = [
        "name_social_media" => "required",
        "social_media_url" => "required|url:http,https",
    ];

    protected array $messages = [
        "name_social_media.required" => "Escolha uma rede social",
        "social_media_url.required" => "Defina a url de sua rede social",
        "social_media_url.url" =>
            "A URL da rede social deve começar com http:// ou https://",
    ];

    public $company;
    public $company_id;
    public array $social_medias = [];
    public $name_social_media;
    public $social_media_url;

    public function mount()
    {
        $this->company_id = $this->company->id;
    }

    public function render()
    {
        $this->socialMediaForCompany();

        return view("livewire.form-social-media");
    }

    public function save()
    {
        $this->validate();

        $checkSocialMedia = $this->checkSocialMedia(
            is_object($this->name_social_media) ? $this->name_social_media->value : $this->name_social_media,
            $this->social_media_url
        );

        if (!$checkSocialMedia) {
            session()->flash(
                "social_media_url",
                "A URL $this->social_media_url não é valida para a rede social $this->name_social_media"
            );
            return;
        }

        FashionSocialMedia::updateOrCreate(
            [
                "name_social_media" => $this->name_social_media,
            ],
            [
                "fashion_company_id" => $this->company_id,
                "professional_or_company" => RegistrationType::COMPANY,
                "social_media_url" => $this->social_media_url,
            ]
        );

        $this->showAlert(
            "success",
            "Rede Social!",
            "Rede  Social adicionada com sucesso"
        );

        $this->render();

        $this->reset("name_social_media", "social_media_url");
    }

    public function edit(string $id)
    {
        $media = FashionSocialMedia::find($id);

        $this->name_social_media = $media->name_social_media;
        $this->social_media_url = $media->social_media_url;
    }

    public function remove(string $id)
    {
        $media = FashionSocialMedia::find($id);
        $media?->delete();

        $this->render();

        $this->showAlert("success", "Rede Social!", "Rede Social excluída com sucesso");
    }

    protected function socialMediaForCompany()
    {
        $this->company = FashionCompany::where(
            "id",
            $this->company_id
        )->first();
        $this->social_medias = $this->company->socialMedia->toArray();
    }

    protected function checkSocialMedia(string $media, string $url)
    {
        switch ($media) {
            case "YouTube":
                $isValid = $this->validateYouTubeUrl($url);
                break;

            case "Instagram":
                $isValid = $this->validateInstagramUrl($url);
                break;

            case "Facebook":
                $isValid = $this->validateFacebookUrl($url);
                break;

            case "TikTok":
                $isValid = $this->validateTikTokUrl($url);
                break;

            case "Twitter":
                $isValid = $this->validateTwitterUrl($url);
                break;

            case "Pinterest":
                $isValid = $this->validatePinterestUrl($url);
                break;

            case "LinkedIn":
                $isValid = $this->validateLinkedInUrl($url);
                break;

            default:
                $isValid = false;
                break;
        }

        if ($isValid) {
            return true;
        } else {
            return false;
        }
    }

    protected function validateYouTubeUrl(string $url)
    {
        return strpos($url, "https://www.youtube.com") === 0;
    }

    protected function validateInstagramUrl(string $url)
    {
        return strpos($url, "https://www.instagram.com") === 0;
    }

    protected function validateFacebookUrl(string $url)
    {
        return strpos($url, "https://www.facebook.com") === 0;
    }

    protected function validateTikTokUrl(string $url)
    {
        return strpos($url, "https://www.tiktok.com") === 0;
    }

    protected function validateTwitterUrl(string $url)
    {
        return strpos($url, "https://www.twitter.com") === 0;
    }

    protected function validatePinterestUrl(string $url)
    {
        return strpos($url, "https://www.pinterest.com") === 0;
    }

    protected function validateLinkedInUrl(string $url)
    {
        return strpos($url, "https://www.linkedin.com") === 0;
    }
}
