<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LoginController;
// use App\Http\Controllers\Admin\ResetPasswordController;


 // Admin Login
 Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
 Route::post('/login', [LoginController::class, 'login']);

 // Admin Logout
 Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

 Route::middleware('auth')
 ->group(function () {

    Route::get('/', [HomeController::class, 'index']);
     // Admin Dashboard
     Route::get('/home', [HomeController::class, 'index'])->name('home');
 });

 //  Admin Password Reset
 // Route::get('/password/reset', [ResetPasswordController::class, 'showLinkRequestForm'])->name('admin.password.request');
 // Route::post('/password/email', [ResetPasswordController::class, 'sendResetLinkEmail'])->name('admin.password.email');
 // Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('admin.password.reset');
 // Route::post('/password/reset', [ResetPasswordController::class, 'reset']);