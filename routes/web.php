<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['guest'])->group(function (){

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');

});

Route::middleware(['auth'])->group(function () {
    Route::put('/home/update', [HomeController::class, 'update'])->name('home.update');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
