<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.layout.app');
});

Route::middleware(['guest'])->group(function(){
    Route::get('/admin/login', [AdminLoginController::class, 'login'])->name('login');
    Route::post('/admin/submit', [AdminLoginController::class, 'submit'])->name('admin.submit');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/admin/dashboard', [HomeController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/profile', [HomeController::class, 'profile'])->name('admin.profile');
    Route::put('/admin/profile/update', [HomeController::class, 'updateprofile'])->name('admin.profile_update');
    Route::get('/admin/logout', [HomeController::class, 'logoutAdmin'])->name('logout');

    Route::get('/admin/home', [HomeController::class, 'home'])->name('home');
    Route::get('/admin/home/tambah', [HomeController::class, 'create'])->name('home.tambah');
    Route::post('/admin/home/tambah', [HomeController::class, 'store'])->name('home.store');
    Route::get('/admin/home/edit/{id_home}', [HomeController::class, 'edit'])->name('home.edit');
    Route::put('/admin/home/update/{id_home}', [HomeController::class, 'update'])->name('home.update');
    Route::get('/admin/home/delete/{id_home}', [HomeController::class, 'delete'])->name('home.delete');

    Route::get('/admin/about', [AboutController::class, 'about'])->name('about');
    Route::get('/admin/about/tambah', [AboutController::class, 'create'])->name('about.tambah');
    Route::post('/admin/about/tambah', [AboutController::class, 'store'])->name('about.store');
    Route::get('/admin/about/edit/{id_about}', [AboutController::class, 'edit'])->name('about.edit');
    Route::put('/admin/about/edit/{id_about}', [AboutController::class, 'update'])->name('about.update');
    


});


