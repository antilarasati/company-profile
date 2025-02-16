<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TimController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'userhome'])->name('user.home');
Route::post('/testimonial', [TestimonialController::class, 'testimonial'])->name('user.testimonial');

Route::middleware(['guest'])->group(function(){
    Route::get('/admin/login', [AdminLoginController::class, 'login'])->name('login');
    Route::post('/admin/submit', [AdminLoginController::class, 'submit'])->name('admin.submit');
});

Route::middleware(['auth'])->group(function () {
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
    Route::put('/admin/about/update/{id_about}', [AboutController::class, 'update'])->name('about.update');
    Route::get('/admin/about/delete/{id_about}', [AboutController::class, 'delete'])->name('about.delete');


    Route::get('/admin/menu', [MenuController::class, 'menu'])->name('menu');
    Route::get('/admin/menu/tambah', [MenuController::class, 'create'])->name('menu.tambah');
    Route::post('/admin/menu/tambah', [MenuController::class, 'store'])->name('menu.store');
    Route::get('/admin/menu/edit/{id_menu}', [MenuController::class, 'edit'])->name('menu.edit');
    Route::put('/admin/menu/update/{id_menu}', [MenuController::class, 'update'])->name('menu.update');
    Route::get('/admin/menu/delete/{id_menu}', [MenuController::class, 'delete'])->name('menu.delete');


    Route::get('/admin/tim', [TimController::class, 'tim'])->name('tim');
    Route::get('/admin/tim/tambah', [TimController::class, 'create'])->name('tim.tambah');
    Route::post('/admin/tim/tambah', [TimController::class, 'store'])->name('tim.store');
    Route::get('/admin/tim/edit/{id_tim}', [TimController::class, 'edit'])->name('tim.edit');
    Route::put('/admin/tim/update/{id_tim}', [TimController::class, 'update'])->name('tim.update');
    Route::get('/admin/tim/delete/{id_tim}', [TimController::class, 'delete'])->name('tim.delete');


    Route::get('/admin/contact', [ContactController::class, 'contact'])->name('contact');
    Route::get('/admin/contact/tambah', [ContactController::class, 'create'])->name('contact.tambah');
    Route::post('/admin/contact/tambah', [ContactController::class, 'store'])->name('contact.store');
    Route::get('/admin/contact/edit/{id_contact}', [ContactController::class, 'edit'])->name('contact.edit');
    Route::put('/admin/contact/update/{id_contact}', [ContactController::class, 'update'])->name('contact.update');
    Route::get('/admin/contact/delete/{id_contact}', [ContactController::class, 'delete'])->name('contact.delete');

    Route::get('/admin/testimon', [TestimonialController::class, 'testimon'])->name('testimon');
    Route::get('/admin/testimon/delete/{id}', [TestimonialController::class, 'delete'])->name('testimon.delete');
});
