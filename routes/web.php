<?php

declare(strict_types=1);

use App\Livewire\Home;
use Illuminate\Support\Facades\Route;
use App\Livewire\FashionCompanyComponent;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\FashionVacanciesController;
use App\Http\Controllers\Auth\Company\AuthCompanyController;
use App\Http\Controllers\Auth\Professional\DashboardController;
use App\Http\Controllers\Auth\Professional\AuthProfessionalController;
use App\Http\Controllers\Auth\Company\DashboardController as CompanyController;

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

Route::get("/auth/{provider}/redirect", [
    AuthController::class,
    "redirectToProvider",
])->name("redirect");
Route::get("/auth/{provider}/callback", [
    AuthController::class,
    "handleProviderCallback",
])->name("callback");

//Professional Routes
Route::controller(AuthProfessionalController::class)
    ->name("professional")
    ->prefix("professional")
    ->group(function () {
        Route::get("register", "register")->name(".register");
        Route::get("login", "index")->name(".index");
        Route::post("login", "loginByForm")->name(".login");
        Route::get("logout", "logout")->name(".logout");

        Route::middleware("professional")->group(function () {
            Route::get("dashboard", [
                DashboardController::class,
                "index",
            ])->name(".dashboard");
            Route::get("profile", [
                DashboardController::class,
                "profile",
            ])->name(".profile");
            Route::get("my-vacancies", [
                DashboardController::class,
                "myVacancies",
            ])->name(".myVacancies");
        });
    });

// Company Rotes
Route::controller(AuthCompanyController::class)
    ->name("company")
    ->prefix("company")
    ->group(function () {
        Route::get("register", "register")->name(".register");
        Route::get("login", "index")->name(".index");
        Route::post("login", "loginByForm")->name(".login");
        Route::get("recruiter", "recruiter")->name(".recruiter");
        Route::get("logout", "logout")->name(".logout");

        Route::middleware("company")->group(function () {
            Route::get("dashboard", [CompanyController::class, "index"])->name(
                ".dashboard"
            );
            Route::get("profile", [CompanyController::class, "profile"])->name(
                ".profile"
            );
            Route::get("my-vacancies", [
                CompanyController::class,
                "myVacancies",
            ])->name(".myVacancies");
            Route::get("my-candidates/{candidates?}", [
                CompanyController::class,
                "myCandidates",
            ])->name(".myCandidates");
            Route::get("my-candidates/candidate/{candidate}", [
                CompanyController::class,
                "candidate",
            ])->name(".candidate");
            Route::get("add-vacancies", [
                CompanyController::class,
                "addVacancies",
            ])->name(".addVacancies");
            Route::get("vacancies/{vacancy}/edit", [
                CompanyController::class,
                "editVacancy",
            ])->name(".vacancy.edit");
        });
    });
