<?php

namespace App\Http\Controllers\Auth\Company;

use App\Http\Controllers\Controller;
use App\Services\AuthService;

class AuthCompanyController extends Controller
{
    public function loginByForm()
    {
        return view("livewire.pages.auth.company.login");
    }

    public function redirectToProvider($provider)
    {
        return AuthService::redirectToProvider($provider);
    }

    public function handleProviderCallback($provider)
    {
        return AuthService::handleProviderCallback($provider);
    }

    public function register()
    {
        return view("livewire.pages.auth.company.register");
    }

    public function recruiter()
    {
        return view("livewire.pages.auth.company.recruiter");
    }
}
