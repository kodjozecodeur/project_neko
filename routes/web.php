<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('backoffice.customer.dashboard');
// });

//creation ofcustomer prefix routes
Route::prefix('customer')->group(function () {
    Route::view('/dashboard', 'backoffice.customer.dashboard')->name('customer.dashboard');
    Route::view('/offers', 'backoffice.customer.offers')->name('customer.offers');
    Route::view('/wash_session', 'backoffice.customer.wash_session')->name('customer.wash_session');
    Route::view('/account_settings', 'backoffice.customer.account_settings')->name('customer.account_settings');
});
