<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;



Route::get('/', function () {
    return view('welcome');
});

// route for frontend pages

//creation ofcustomer prefix routes
Route::prefix('customer')->group(function () {
    Route::view('/dashboard', 'backoffice.customer.dashboard')->name('customer.dashboard');
    Route::view('/offers', 'backoffice.customer.offers')->name('customer.offers');
    Route::view('/wash_session', 'backoffice.customer.wash_session')->name('customer.wash_session');
    Route::view('/account_settings', 'backoffice.customer.account_settings')->name('customer.account_settings');
});

//auth registration
Route::get('/registration', [CustomAuthController::class, 'createRegisterPage'])->name('register-user');
Route::post('/custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register');
Route::get('/dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');

//auth login
Route::get('/login', [CustomAuthController::class, 'loginPage'])->name('login-page');
Route::post('/custom-login', [CustomAuthController::class, 'customLogin'])->name('login');
