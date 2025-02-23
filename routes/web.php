<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/registration', [FrontController::class, 'registration'])->name('registration');
Route::get('/registration_verify/{email}/{token}', [FrontController::class, 'registration_verify_email'])->name('registration_verify_email');
Route::post('/registration', [FrontController::class, 'registration_submit'])->name('registration_submit');
Route::get('/login', [FrontController::class, 'login'])->name('login');
Route::post('/login', [FrontController::class, 'login_submit'])->name('login_submit');
Route::get('/forget_password', [FrontController::class, 'forget_password'])->name('forget_password');

//User
Route::middleware(['auth'])->prefix('user')->group(function () {    
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user_dashboard');
    Route::get('/logout', [UserController::class, 'logout'])->name('user_logout');
});

//Admin
Route::middleware('admin')->prefix('admin')->group(function() {
    Route::get('/profile', [AdminAuthController::class, 'profile'])->name('admin_profile');
    Route::post('/profile', [AdminAuthController::class, 'profile_submit'])->name('admin_profile_submit');

    Route::get('/dashboard', [AdminDashboardController::class, 'Dashboard'])->name('admin_dashboard');
});
Route::prefix('admin')->group(function() {
    Route::get('/login', [AdminAuthController::class, 'login'])->name('admin_login');
    Route::post('/login', [AdminAuthController::class, 'login_submit'])->name('admin_login_submit');

    Route::get('/forget-password', [AdminAuthController::class, 'forgetPassword'])->name('admin_forget_password');
    Route::post('/forget-password', [AdminAuthController::class, 'forget_password_submit'])->name('admin_forget_password_submit');

    Route::get('/reset-password/{token}/{email}', [AdminAuthController::class, 'resetPassword'])->name('admin_reset_password');
    Route::post('/reset-password/{token}/{email}', [AdminAuthController::class, 'reset_password_submit'])->name('admin_reset_password_submit');
    
    Route::get('/logout', [AdminAuthController::class, 'logout'])->name('admin_logout');
});
