<?php

namespace App\Http\Controllers\Auth\Company;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\FashionCompany;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Services\AuthSocialiteService;
use Illuminate\Support\Facades\Session;

class AuthCompanyController extends Controller
{
    public function index()
    {
        if (Auth::guard("company")->check()) {
            return view("livewire.pages.auth.company.dashboard");
        }

        return view("livewire.pages.auth.company.login");
    }

    public function loginByForm(Request $request): RedirectResponse
    {
        $theCompanyExists = FashionCompany::where('email', $request->email)
        ->whereNotNull('provider')
        ->first();

        if($theCompanyExists){

            Auth::guard("company")->login($theCompanyExists);
            return redirect()->route("company.dashboard");
        }

        $credentials = $request->only("email", "password");

        if (Auth::guard("company")->attempt($credentials)) {
            return redirect()->route("company.dashboard");
        }

        return back()->withErrors([
            "email" => "Email e ou Senha informados são inválidas",
        ]);
    }

    public function register()
    {
        return view("livewire.pages.auth.company.register");
    }

    public function recruiter()
    {
        return view("livewire.pages.auth.company.recruiter");
    }

    public function logout()
    {
        Auth::guard("company")->logout();
        Session::forget('current_url');
        return redirect()->route("home");
    }
}
