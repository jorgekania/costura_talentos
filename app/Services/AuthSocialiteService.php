<?php

namespace App\Services;

use Exception;
use App\Models\FashionCompany;
use App\Models\FashionProfessional;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class AuthSocialiteService
{
    public static function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public static function handleProviderCallback($provider, $routerSegment)
    {
        try {
            $socialiteUser = Socialite::driver($provider)->user();
            $routerSegment = self::treatRoute($routerSegment);

            if ($routerSegment === "professional") {
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
                Session::forget("current_url");

                return redirect()->route("professional.dashboard");
            } else {
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
                Session::forget("current_url");

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

    protected static function treatRoute($route)
    {
        $segments = explode("/", $route);

        if (count($segments) >= 2) {
            return $segments[3];
        }

        return "Segmento de rota não definido";
    }
}
