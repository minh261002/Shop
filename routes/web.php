<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\UserCatalogueController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Ajax\DashboardController;
use App\Http\Controllers\Ajax\LocationController;
use Illuminate\Support\Facades\Route;

Route::middleware(['login'])->group(function () {
    Route::get('/admin/login', [AuthController::class, 'index'])->name('admin.login');
    Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.post');
});

Route::middleware(['auth'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');


        // User
        Route::group(['prefix' => 'user'], function () {
            Route::get('/', [UserController::class, 'index'])->name('admin.user.index');
            Route::get('/create', [UserController::class, 'create'])->name('admin.user.create');
            Route::post('/store', [UserController::class, 'store'])->name('admin.user.store');
            Route::get('/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
            Route::put('/update/{id}', [UserController::class, 'update'])->name('admin.user.update');
            Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('admin.user.delete');
        });

        // User Catalogue
        Route::group(['prefix' => 'user/catalogue'], function () {
            Route::get('/', [UserCatalogueController::class, 'index'])->name('admin.user.catalogue.index');
            Route::get('/create', [UserCatalogueController::class, 'create'])->name('admin.user.catalogue.create');
            Route::post('/store', [UserCatalogueController::class, 'store'])->name('admin.user.catalogue.store');
            Route::get('/edit/{id}', [UserCatalogueController::class, 'edit'])->name('admin.user.catalogue.edit');
            Route::put('/update/{id}', [UserCatalogueController::class, 'update'])->name('admin.user.catalogue.update');
            Route::delete('/delete/{id}', [UserCatalogueController::class, 'destroy'])->name('admin.user.catalogue.delete');
        });
    });
});

// Ajax
Route::get('ajax/location/getLocation', [LocationController::class, 'getLocation'])->name('ajax.location.index');
Route::post('ajax/dashboard/changeStatusAll', [DashboardController::class, 'changeStatusAll'])->name('ajax.dashboard.changeStatusAll');
Route::post('ajax/dashboard/changeStatus', [DashboardController::class, 'changeStatus'])->name('ajax.dashboard.changeStatus');