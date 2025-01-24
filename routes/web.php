<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix("auth")->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::match(["get", "post"], "/login", "login")->name("auth.login");
        Route::match(["get", "post"], "/register", "register")->name("auth.register");
    });
});

Route::get('/', function () {
    return view('home'); 
})->name('home');
Route::get('contact', function () {
    return view('contact'); 
})->name('contact');
