<?php

use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.layout.app');
});

Route::middleware(['guest'])->group(function(){
    Route::get('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login');
    Route::post('/admin/submit', [AdminLoginController::class, 'submit'])->name('admin.submit');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/admin/dashboard', [HomeController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/profile', [HomeController::class, 'profile'])->name('admin.profile');
    Route::put('/admin/profile/update', [HomeController::class, 'update'])->name('admin.profile_update');
    Route::get('/admin/logout', [HomeController::class, 'logoutAdmin'])->name('admin.logout');
});


