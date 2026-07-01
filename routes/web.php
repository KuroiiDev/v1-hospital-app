<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/service', function () {
    return view('pages.service');
})->name('service');

Route::get('/price', function () {
    return view('pages.price');
})->name('price');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::middleware(['guest'])->group(function (){

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');

});

Route::middleware(['auth'])->group(function () {
    Route::put('/home/update', [HomeController::class, 'update'])->name('home.update');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
