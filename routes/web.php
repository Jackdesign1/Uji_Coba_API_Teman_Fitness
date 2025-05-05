<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\API\AuthController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;

Route::post('/api/register', [AuthController::class, 'register'])->withoutMiddleware([VerifyCsrfToken::class]);
Route::post('/api/login', [AuthController::class, 'login'])->withoutMiddleware([VerifyCsrfToken::class]);

Route::middleware('auth:api')->post('a/pi/logout', [AuthController::class, 'logout'])->withoutMiddleware([VerifyCsrfToken::class]);
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
  Route::resource('banner', BannerController::class);


  Route::get('/company-profile', [CompanyProfileController::class, 'index'])->name('company.index');
  Route::get('/company-profile/edit', [CompanyProfileController::class, 'edit'])->name('company.edit');
  Route::post('/company-profile/update', [CompanyProfileController::class, 'update'])->name('company.update');
});
