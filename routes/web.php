<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'enunciado');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/viajes-disponibles', [App\Http\Controllers\TripController::class, 'available'])->name('viajes-disponibles');

Route::post('/reservar/{trip}/{user}', [App\Http\Controllers\TripController::class, 'reservar'])->name('reservar');

