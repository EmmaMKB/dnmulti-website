<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/services/mining', function () {
    return view('services.mining');
})->name('services.mining');

Route::get('/services/building-electricity', function () {
    return view('services.building-electricity');
})->name('services.building-electricity');

Route::get('/services/freezers-electricity', function () {
    return view('services.freezers-electricity');
})->name('services.freezers-electricity');

Route::get('/services/maintenance', function () {
    return view('services.maintenance');
})->name('services.maintenance');
