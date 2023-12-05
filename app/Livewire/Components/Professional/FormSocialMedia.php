<?php

namespace App\Livewire\Components\Professional;

use App\Models\FashionProfessional;
use App\Models\FashionSocialMediaProfessional;
use Livewire\Component;
use App\Traits\AlertsTrait;

class FormSocialMedia extends Component
{
    use AlertsTrait;

    protected array $rules = [
        "name_social_media" => "required",
        "social_media_url" => "required|url:https",
    ];

    protected array $messages = [
        "name_social_media.required" => "Escolha uma rede social",
        "social_media_url.required" => "Defina a url de sua rede social",
        "social_media_url.url" =>
            "A URL da rede social deve começar com https://",
    ];

    public $professional;
    public $professional_id;
    public array $social_medias = [];
    public $name_social_media;
    public $social_media_url;

    public function mount()
    {
        $this->professional_id = $this->professional->id;
    }

    public function render()
    {
        $this->socialMediaForCompany();

        return view("livewire.components.professional.form-social-media");
    }

    public function save()
    {
        $this->validate();

        $checkSocialMedia = $this->checkSocialMedia(
            is_object($this->name_social_media)
                ? $this->name_social_media->value
                : $this->name_social_media,
            $this->social_media_url
        );

        if (!$checkSocialMedia) {
            session()->flash(
                "social_media_url",
                "A URL $this->social_media_url não é valida para a rede social $this->name_social_media"
            );
            return;
        }

        FashionSocialMediaProfessional::updateOrCreate(
            [
                "name_social_media" => $this->name_social_media,
            ],
            [
                "fashion_professional_id" => $this->professional_id,
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
        $media = FashionSocialMediaProfessional::find($id);

        $this->name_social_media = $media->name_social_media;
        $this->social_media_url = $media->social_media_url;
    }

    public function remove(string $id)
    {
        $media = FashionSocialMediaProfessional::find($id);
        $media?->delete();

        $this->render();

        $this->showAlert(
            "success",
            "Rede Social!",
            "Rede Social excluída com sucesso"
        );
    }

    protected function socialMediaForCompany()
    {
        $this->professional = FashionProfessional::where(
            "id",
            $this->professional_id
        )->first();
        $this->social_medias = $this->professional->socialMedia->toArray();
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
