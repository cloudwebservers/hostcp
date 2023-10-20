<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ClientController;
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


        // Admin Clients
        Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
        Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
        Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
        Route::get('/clients/{client}', [ClientController::class, 'show'])->name('clients.show');
        Route::get('/clients/{client}/edit', [ClientController::class, 'edit'])->name('clients.edit');
        Route::put('/clients/{client}', [ClientController::class, 'update'])->name('clients.update');
        Route::delete('/clients/{client}', [ClientController::class, 'destroy'])->name('clients.destroy');
        
 });

 //  Admin Password Reset
 // Route::get('/password/reset', [ResetPasswordController::class, 'showLinkRequestForm'])->name('admin.password.request');
 // Route::post('/password/email', [ResetPasswordController::class, 'sendResetLinkEmail'])->name('admin.password.email');
 // Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('admin.password.reset');
 // Route::post('/password/reset', [ResetPasswordController::class, 'reset']);