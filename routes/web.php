<?php

use App\Http\Controllers\Frontend\BikeController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\NewCarsController;
use App\Http\Controllers\Frontend\ScootersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'homePage'])->name('homepage');
Route::get('/cars', [NewCarsController::class, 'newCars'])->name('newcars');
Route::get('/popular-cars', [NewCarsController::class, 'popularCars'])->name('popular-cars');
Route::get('/upcoming-cars', [NewCarsController::class, 'upcomingCars'])->name('upcoming-cars');
Route::get('/latest-cars', [NewCarsController::class, 'latestCars'])->name('latest-cars');
Route::get('/electric-cars', [NewCarsController::class, 'electricCars'])->name('electric-cars');
Route::get('/bikes', [BikeController::class, 'newBikes'])->name('newbikes');
Route::get('/popular-bikes', [BikeController::class, 'popularBikes'])->name('popular-bikes');
Route::get('/upcoming-bikes', [BikeController::class, 'upcomingBikes'])->name('upcoming-bikes');
Route::get('/latest-bikes', [BikeController::class, 'latestBikes'])->name('latest-bikes');
Route::get('/electric-bikes', [BikeController::class, 'electricBikes'])->name('electric-bikes');
Route::get('/scooters',[ScootersController::class,'newScooters'])->name('newScooters');
Route::get('/popular-scooters', [ScootersController::class, 'popularScooters'])->name('popular-scooters');
Route::get('/upcoming-scooters', [ScootersController::class, 'upcomingScooters'])->name('upcoming-scooters');
Route::get('/latest-scooters', [ScootersController::class, 'latestScooters'])->name('latest-scooters');
Route::get('/electric-scooters', [ScootersController::class, 'electricScooters'])->name('electric-scooters');

