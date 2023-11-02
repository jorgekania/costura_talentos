<?php

declare(strict_types=1);

use App\Livewire\Home;
use Illuminate\Support\Facades\Route;
use App\Livewire\FashionCompanyComponent;


Route::get('/', Home::class)->name('home');


// Route::get('/fashion-companies', FashionCompanyCreate::class)->name('fashionCompanies.index');
Route::get('/fashion-companies', FashionCompanyComponent::class)->name('fashionCompanies');
// Route::get('/fashion-companies/{id}', [FashionCompanyController::class, 'getCompanyById'])->name('fashionCompanies.get-company');
// Route::put('/fashion-companies/{id}', [FashionCompanyController::class, 'update'])->name('fashionCompanies.update');
// Route::delete('/fashion-companies/{id}', [FashionCompanyController::class, 'delete'])->name('fashionCompanies.delete');
