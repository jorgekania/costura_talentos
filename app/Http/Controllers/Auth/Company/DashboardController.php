<?php

namespace App\Http\Controllers\Auth\Company;

use App\Traits\AlertsTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EditCompanyRequest;

class DashboardController extends Controller
{
    use AlertsTrait;

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

    public function addVacancies()
    {
        return view("livewire.pages.auth.company.add-vacancy");
    }
}
