<?php

namespace App\Http\Controllers\Auth\Professional;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view("livewire.pages.auth.professional.dashboard");
    }

    public function profile()
    {
        return view("livewire.pages.auth.professional.profile");
    }

    public function myVacancies()
    {
        return view("livewire.pages.auth.professional.my-vacancies");
    }
}
