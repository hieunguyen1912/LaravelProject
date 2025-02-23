<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('admin')->prefix('admin')->group(function() {
    Route::get('/profile', [AdminAuthController::class, 'profile'])->name('admin_profile');
    Route::get('/dashboard', [AdminDashboardController::class, 'Dashboard'])->name('admin_dashboard');
});
Route::prefix('admin')->group(function() {
    Route::get('/login', [AdminAuthController::class, 'login'])->name('admin_login');
    Route::post('/login', [AdminAuthController::class, 'login_submit'])->name('admin_login_submit');
    Route::get('/forget-password', [AdminAuthController::class, 'forgetPassword'])->name('admin_forget_password');
    Route::get('/reset-password', [AdminAuthController::class, 'resetPassword'])->name('admin_reset_password');
    Route::get('/logout', [AdminAuthController::class, 'logout'])->name('admin_logout');
});
