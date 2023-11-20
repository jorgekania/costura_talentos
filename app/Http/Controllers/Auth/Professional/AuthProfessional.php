<?php

namespace App\Http\Controllers\Auth\Professional;

use App\Http\Controllers\Controller;

class AuthProfessional extends Controller
{
    public function login()
    {
        return view("livewire.pages.auth.professional.login");
    }

    public function register()
    {
        return view("livewire.pages.auth.professional.register");
    }
}
