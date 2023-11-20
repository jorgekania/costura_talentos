<?php

namespace App\Http\Controllers\Auth\Company;

use App\Http\Controllers\Controller;

class AuthCompany extends Controller
{
    public function login()
    {
        return view("livewire.pages.auth.company.login");
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
