<?php

declare(strict_types=1);

use App\Http\Controllers\FashionCompanyController;
use App\Livewire\FashionCompanyComponent;
use App\Models\FashionCompany;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('app');
});


Route::get('/fashion-companies', FashionCompanyComponent::class)->name('fashionCompanies.index');
Route::post('/fashion-companies', [FashionCompanyController::class, 'create'])->name('fashionCompanies.create');
Route::get('/fashion-companies/{id}', [FashionCompanyController::class, 'getCompanyById'])->name('fashionCompanies.get-company');
Route::put('/fashion-companies/{id}', [FashionCompanyController::class, 'update'])->name('fashionCompanies.update');
Route::delete('/fashion-companies/{id}', [FashionCompanyController::class, 'delete'])->name('fashionCompanies.delete');
