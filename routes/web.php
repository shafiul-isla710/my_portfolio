<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[PageController::class, 'homePage'])->name('home-page');
Route::get('/about',[PageController::class, 'aboutPage'])->name('about-page');
