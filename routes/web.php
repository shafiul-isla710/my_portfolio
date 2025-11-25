<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\SliderController;

/**
 * Authenticated Admin Routes
 */
Route::get('/login',[AdminController::class, 'loginPage'])->name('login-page');
Route::post('/login',[AdminController::class, 'login'])->name('login');

Route::get('/logout',[AdminController::class, 'logout'])->name('logout')->middleware(AuthMiddleware::class);


Route::get('/',[PageController::class, 'homePage'])->name('home-page');
Route::get('/about',[PageController::class, 'aboutPage'])->name('about-page');
Route::get('/service',[PageController::class, 'servicePage'])->name('service-page');
Route::get('/resume',[PageController::class, 'resumePage'])->name('resume-page');
Route::get('/contact',[PageController::class, 'contactPage'])->name('contact-page');


Route::middleware(AuthMiddleware::class)->group(function (){
    //Dashboard Route
    Route::get('/dashboard',[DashboardController::class, 'dashboardPage'])->name('dashboard');

    //slider Routes
    // Route::get('/slider/index',[SliderController::class, 'index'])->name('slider.index');
    Route::resource('/slider', SliderController::class)->names('slider');

});
