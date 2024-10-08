<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\NewCarsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'homePage'])->name('homepage');
Route::get('cars', [NewCarsController::class, 'newCars'])->name('newcars');
