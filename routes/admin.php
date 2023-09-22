<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::get('/test', function () {
    echo "Abhiram";
});


Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', [AdminController::class, 'login'])->name('admin-login');
    Route::post('/login', [AdminController::class, 'loginPost'])->name('admin-login-post');
    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin-dashboard');
        Route::get('/logout', [Admincontroller::class, 'adminLogout'])->name('admin-logout');
        Route::get('/profile', [Admincontroller::class, 'adminProfile'])->name('admin-profile');
        Route::post('/profile/update', [AdminController::class, 'adminProfileUpdate'])->name('admin-profile-update');
        Route::get('/change/password', [Admincontroller::class, 'changePassword'])->name('admin-change-password');
        Route::post('/update/password', [AdminController::class, 'updatePassword'])->name('admin-password-update');


        Route::get('user/profile', [ProfileController::class, 'index'])->name('user-profile');
        Route::post('user/profile/update', [ProfileController::class, 'update'])->name('user-profile-update');


        Route::get('/client/create', [ClientController::class, 'create'])->name('client-create');
        Route::post('/client/store', [ClientController::class, 'store'])->name('client-store');
        Route::get('/client', [ClientController::class, 'index'])->name('client');
        Route::get('/client/edit/{id}', [ClientController::class, 'edit'])->name('client-edit');
        Route::post('/client/update', [ClientController::class, 'update'])->name('client-update');
        Route::get('/client/delete/{id}', [ClientController::class, 'delete'])->name('client-delete');
        Route::get('/client/inactive/{id}', [ClientController::class, 'inactive'])->name('client-inactive');
        Route::get('/client/active/{id}', [ClientController::class, 'active'])->name('client-active');


        Route::get('/about', [AboutController::class, 'index'])->name('about');
        Route::post('/about/us/content/update', [AboutController::class, 'update'])->name('about-update');

        Route::get('service/create', [ServiceController::class, 'create'])->name('service-create');
        Route::post('service/store', [ServiceController::class, 'store'])->name('service-store');
        Route::get('service', [ServiceController::class, 'index'])->name('service');
        Route::get('service/edit/{id}', [ServiceController::class, 'edit'])->name('service-edit');
        Route::post('service/update', [ServiceController::class, 'update'])->name('service-update');
        Route::get('service/delete/{id}', [ServiceController::class, 'delete'])->name('service-delete');
        Route::get('service/inactive/{id}', [ServiceController::class, 'inactive'])->name('service-inactive');
        Route::get('service/active/{id}', [ServiceController::class, 'active'])->name('service-active');

    });
});
