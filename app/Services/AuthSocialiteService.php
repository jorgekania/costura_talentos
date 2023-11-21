<?php

namespace App\Services;

use App\Models\FashionCompany;
use Exception;
use App\Models\FashionProfessional;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthSocialiteService
{
    public static function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public static function handleProviderCallback($provider)
    {
        try {
            $socialiteUser = Socialite::driver($provider)->user();

            $routerSegment = request()->segment(1);

            if($routerSegment === 'professional'){

                $professional = FashionProfessional::updateOrCreate(
                    [
                        "email" => $socialiteUser->getEmail(),
                    ],
                    [
                        "name" => $socialiteUser->getName(),
                        "avatar" => $socialiteUser->getAvatar(),
                        "provider" => $provider,
                    ]
                );

                Auth::guard("professional")->login($professional);

                return redirect()->route("professional.dashboard");
            }else{

                $company = FashionCompany::updateOrCreate(
                    [
                        "email" => $socialiteUser->getEmail(),
                    ],
                    [
                        "corporate_reason" => $socialiteUser->getName(),
                        "logo" => $socialiteUser->getAvatar(),
                        "provider" => $provider,
                    ]
                );

                Auth::guard("company")->login($company);

                return redirect()->route("company.dashboard");
            }

        } catch (Exception $e) {
            return back()->withErrors([
                "error" =>
                    "Ocorreu um erro durante o login com o provedor " .
                    ucfirst($provider) .
                    " - " .
                    $e->getMessage(),
            ]);
        }
    }
}
