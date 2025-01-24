<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;

Route::prefix("auth")->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::match(["get", "post"], "/login", "login")->name("auth.login");
        Route::match(["get", "post"], "/register", "register")->name("auth.register");
    });
});

Route::get('/', function () {
    return view('home'); 
})->name('home');


Route::prefix('quote')->group(function () {
    Route::resource('quotes', QuoteController::class);
});
