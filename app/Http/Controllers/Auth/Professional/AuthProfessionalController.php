<?php

namespace App\Http\Controllers\Auth\Professional;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\FashionProfessional;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Services\AuthSocialiteService;

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
        $theProfessionalExists = FashionProfessional::where(
            "email",
            $request->email
        )
            ->whereNotNull("provider")
            ->first();

        if ($theProfessionalExists) {
            Auth::guard("professional")->login($theProfessionalExists);
            return redirect()->route("professional.dashboard");
        }

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
        return AuthSocialiteService::redirectToProvider($provider);
    }

    public function handleProviderCallback($provider)
    {
        return AuthSocialiteService::handleProviderCallback($provider);
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
