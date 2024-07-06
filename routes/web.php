<?php


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserLoginController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserRegistrationController;

Route::get('/', function () {
    return view('home/index');
});
Route::middleware(['guest'])->group(function () {
//User Registration Routes
    Route::get('/register', [UserRegistrationController::class, 'register'])->name('register.form');
    Route::post('/register', [UserRegistrationController::class, 'store'])->name('register');
// User Login Routes
    Route::get('/login', [UserLoginController::class, 'showLoginForm'])->name('login.form');
    Route::post('/login', [UserLoginController::class, 'login'])->name('login');
});
Route::middleware(['auth','role:tenant_admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('Company-user.dashboard');
    Route::post('/dashboard/profile/update', [DashboardController::class, 'updateProfile'])->name('user.profile.update');
    Route::post('/logout', [UserLoginController::class, 'logout'])->name('logout');
});








