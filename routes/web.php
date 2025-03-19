<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TemanController;
use App\Http\Middleware\PriaOnly;


Route::get('/', function () {
    return view('auth.login'); // Pastikan file ini ada
});

Route::middleware(['auth', 'PriaOnly'])->group(function () {
    Route::get('home', function () {
        return view('home');
    });
});

// Autentikasi
Auth::routes();

// Halaman Home
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Resource Routes (CRUD)
Route::resource('members', MemberController::class);
Route::resource('workouts', WorkoutController::class);
Route::resource('mentors', MentorController::class);
Route::resource('kelas', KelasController::class);
Route::resource('teman', TemanController::class);

// Rute khusus tambahan (jika diperlukan)
Route::get('/pendaftaran-member', [MemberController::class, 'create'])->name('members.create');

