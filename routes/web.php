<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('register', [App\Http\Controllers\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [App\Http\Controllers\RegisterController::class, 'create']);

Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'admin.auth'], function (){
        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.home');
        Route::post('logout', [\App\Http\Controllers\Admin\LogoutController::class, 'handleLogout'])->name('admin.logout');
    });

    Route::get('login', [\App\Http\Controllers\Admin\LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [\App\Http\Controllers\Admin\LoginController::class, 'handleLogin']);
});
//Auth::routes();
