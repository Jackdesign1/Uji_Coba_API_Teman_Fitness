<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\KelasController;

Route::get('/', function () {
    return view('auth.login'); // Pastikan file ini ada
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Gunakan resource route untuk menangani semua rute CRUD members
Route::resource('members', MemberController::class);
Route::get('/pendaftaran-member', [MemberController::class, 'create'])->name('members.create');
Route::post('/members', [MemberController::class, 'store'])->name('members.store');
Route::resource('workouts', WorkoutController::class);
Route::resource('mentors', MentorController::class);
Route::resource('kelas', KelasController::class);
Route::get('/mentors/create', [MentorController::class, 'create'])->name('mentors.create');

