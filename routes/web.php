<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// ref: https://laravel.com/docs/9.x/routing#required-parameters

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group('login', function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/', [LoginController::class, 'login'])->name('login.post');
});

Route::group('dashboard', function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});

// custom version
Route::group('customer', function () {
    Route::get('/', [CustomerController::class, 'index'])->name('customer');
    Route::post('/', [CustomerController::class, 'store'])->name('customer.store');
    Route::get('/{id}', [CustomerController::class, 'show'])->name('customer.show');
    Route::put('/{id}', [CustomerController::class, 'update'])->name('customer.update');
    Route::delete('/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy');
});

// magic laravel
// ref: https://laravel.com/docs/9.x/controllers#actions-handled-by-resource-controller
Route::resource('products', [ProductController::class]);
