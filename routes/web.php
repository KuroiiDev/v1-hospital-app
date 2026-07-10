<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\MediaController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');
});

Route::middleware(['auth'])->group(function () {
    Route::put('/home/update', [HomeController::class, 'update'])->name('home.update');

    Route::prefix('/admin')->name('admin.')->group(function () {
        // Dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        // Users CRUD
        Route::get('/users',             [UserController::class, 'index'])  ->name('users.index');
        Route::get('/users/create',      [UserController::class, 'create']) ->name('users.create');
        Route::post('/users',            [UserController::class, 'store'])  ->name('users.store');
        Route::get('/users/{user}/edit', [UserController::class, 'edit'])   ->name('users.edit');
        Route::put('/users/{user}',      [UserController::class, 'update']) ->name('users.update');
        Route::delete('/users/{user}',   [UserController::class, 'destroy'])->name('users.destroy');

        // Doctors CRUD
        Route::get('/doctors',               [DoctorController::class, 'index'])  ->name('doctors.index');
        Route::get('/doctors/create',        [DoctorController::class, 'create']) ->name('doctors.create');
        Route::post('/doctors',              [DoctorController::class, 'store'])  ->name('doctors.store');
        Route::put('/doctors/sort',          [DoctorController::class, 'sort'])   ->name('doctors.sort');
        Route::get('/doctors/{doctor}/edit', [DoctorController::class, 'edit'])   ->name('doctors.edit');
        Route::put('/doctors/{doctor}',      [DoctorController::class, 'update']) ->name('doctors.update');
        Route::delete('/doctors/{doctor}',   [DoctorController::class, 'destroy'])->name('doctors.destroy');

        // Settings / Medsos (edit-only, menggunakan home_texts)
        Route::get('/settings', [MediaController::class, 'index']) ->name('settings.index');
        Route::put('/settings', [MediaController::class, 'update'])->name('settings.update');
    });

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
