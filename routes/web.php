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

Route::get('/', [\App\Http\Controllers\GameController::class, 'getWeather'])->name('home');
Route::get('/options', [\App\Http\Controllers\OptionsController::class, 'index'])->name('options');
Route::patch('/options', [\App\Http\Controllers\OptionsController::class, 'changeUnit'])->name('changeUnit');
Route::get('/check', [\App\Http\Controllers\GameController::class, 'check'])->name('check');
