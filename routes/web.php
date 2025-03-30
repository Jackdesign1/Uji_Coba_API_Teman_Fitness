<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\TemanController;
use App\Http\Controllers\CompanyProfileController;

// Halaman utama langsung menampilkan Company Profile
Route::get('/', [CompanyProfileController::class, 'public'])->name('company.public');

// Rute Autentikasi (login, register, dll.)
Auth::routes();

// Halaman admin setelah login
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Rute CRUD hanya bisa diakses setelah login
    Route::resource('members', MemberController::class);
    Route::resource('workouts', WorkoutController::class);
    Route::resource('mentors', MentorController::class);
    Route::resource('kelas', KelasController::class);
    Route::resource('teman', TemanController::class);

  Route::get('/company-profile', [CompanyProfileController::class, 'index'])->name('company.index');
    Route::get('/company-profile/edit', [CompanyProfileController::class, 'edit'])->name('company.edit');
    Route::post('/company-profile/update', [CompanyProfileController::class, 'update'])->name('company.update');
});
