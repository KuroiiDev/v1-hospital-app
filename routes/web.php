<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['guest'])->group(function () {

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');

});

Route::middleware(['auth'])->group(function () {
    Route::put('/home/update', [HomeController::class, 'update'])->name('home.update');

    Route::group(['prefix'=> '/admin', 'as' => 'admin.'], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        
        // Users CRUD
        Route::view('/users', 'admin.users.index')->name('users.index');
        Route::view('/users/create', 'admin.users.create')->name('users.create');
        Route::view('/users/{id}/edit', 'admin.users.edit')->name('users.edit');
        
        // Doctors CRUD
        Route::view('/doctors', 'admin.doctors.index')->name('doctors.index');
        Route::view('/doctors/create', 'admin.doctors.create')->name('doctors.create');
        Route::view('/doctors/{id}/edit', 'admin.doctors.edit')->name('doctors.edit');
        
        // Settings
        Route::view('/settings', 'admin.settings.index')->name('settings.index');
    });

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
