<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PasswordForgotController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
    'prefix' => LaravelLocalization::setLocale(), 
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function() {
	
    Route::get('/', [PagesController::class, 'home']) ->name('home');

    Route::group(['prefix' =>'register'], function() {
        Route::get('/', [RegisterController::class, 'view']) ->name('auth.register');
        Route::post('/', [RegisterController::class, 'handle']) ->name('auth.register');
    });

    Route::group(['prefix' =>'login'], function() {
        Route::get('/', [LoginController::class, 'view']) ->name('auth.login');
        Route::post('/', [LoginController::class, 'handle']) ->name('auth.login');
    });

    Route::prefix('/forgot-password')->group(function () {
        Route::get('/', [PasswordForgotController::class, 'view']) ->name('password.request');
        Route::post('/', [PasswordForgotController::class, 'handle']) ->name('password.email');
    });

    Route::prefix('/reset-password')->group(function () {
        Route::get('/{token}', [PasswordResetController::class, 'view']) ->name('password.reset');
        Route::post('/', [PasswordResetController::class, 'handle']) ->name('password.update');
    });
});