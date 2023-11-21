<?php

namespace App\Http\Controllers\Auth\Professional;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FashionProfessional;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Laravel\Socialite\Facades\Socialite;

class AuthProfessionalController extends Controller
{
    public function index()
    {
        if (Auth::guard("professional")->check()) {
            return view("livewire.pages.auth.professional.dashboard");
        }

        return view("livewire.pages.auth.professional.login");
    }

    public function loginByForm(Request $request): RedirectResponse
    {
        $credentials = $request->only("email", "password");

        if (Auth::guard("professional")->attempt($credentials)) {
            return redirect()->route("professional.dashboard");
        }

        return back()->withErrors([
            "email" => "Email e ou Senha informados são inválidas",
        ]);
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        try {
            $socialiteUser = Socialite::driver($provider)->user();

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
        } catch (\Exception $e) {
            return back()->withErrors([
                "error" =>
                    "Ocorreu um erro durante o login com o provedor " .
                    ucfirst($provider) .
                    " - " .
                    $e->getMessage(),
            ]);
        }
    }

    public function register()
    {
        return view("livewire.pages.auth.professional.register");
    }

    public function logout()
    {
        Auth::guard("professional")->logout();
        return redirect()->route("home");
    }
}
