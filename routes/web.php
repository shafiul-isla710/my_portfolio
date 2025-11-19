<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[PageController::class, 'homePage'])->name('home-page');
Route::get('/about',[PageController::class, 'aboutPage'])->name('about-page');
Route::get('/service',[PageController::class, 'servicePage'])->name('service-page');
Route::get('/resume',[PageController::class, 'resumePage'])->name('resume-page');
Route::get('/contact',[PageController::class, 'contactPage'])->name('contact-page');
