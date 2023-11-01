<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\FashionCompany;
use Illuminate\Support\Facades\Request;

class FashionCompanyController extends Controller
{
    public function index()
    {
        return view('partials.fashion-company', ['companies' => FashionCompany::all()]);
    }

    public function create()
    {
    }

    public function getCompanyById(Request $id)
    {
    }

    public function update(Request $id)
    {
    }

    public function delete(Request $id)
    {
    }
}
