<?php

declare(strict_types=1);

use App\Livewire\Home;
use App\Livewire\LoginCompany;
use Illuminate\Support\Facades\Route;
use App\Livewire\FashionCompanyComponent;
use App\Http\Controllers\FashionVacanciesController;

Route::get("/", Home::class)->name("home");

// Fashion Company routes
// Route::get('/fashion-companies', FashionCompanyCreate::class)->name('fashionCompanies.index');
// Route::get('/fashion-companies/{id}', [FashionCompanyController::class, 'getCompanyById'])->name('fashionCompanies.get-company');
// Route::put('/fashion-companies/{id}', [FashionCompanyController::class, 'update'])->name('fashionCompanies.update');
// Route::delete('/fashion-companies/{id}', [FashionCompanyController::class, 'delete'])->name('fashionCompanies.delete');
Route::get("/fashion-companies", FashionCompanyComponent::class)->name(
    "fashionCompanies"
);

// Vacancies routes
Route::get("/vagas", [FashionVacanciesController::class, "index"])->name(
    "vacancies"
);
Route::post("/vagas", [
    FashionVacanciesController::class,
    "filterVacancies",
])->name("vacancies.filter");
Route::get("/vaga/{title}/{id}", [
    FashionVacanciesController::class,
    "vacancy",
])->name("vacancy");

//Auth Routes
Route::get("/login/company", LoginCompany::class)->name('login');
