<?php

namespace App\Http\Controllers\Auth\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view("livewire.pages.auth.company.dashboard");
    }

    public function profile()
    {
        return view("livewire.pages.auth.company.profile");
    }

    public function myVacancies()
    {
        return view("livewire.pages.auth.company.my-vacancies");
    }
}
