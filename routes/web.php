<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NutritionController;

// Route for the main calculator page
Route::get('/Kalkulator', [NutritionController::class, 'index'])->name('kalkulator');

// Route for handling the calculation and result
Route::post('/Kalkulator/Calculate', [NutritionController::class, 'calculate'])->name('calculate');

// Route for the result page
Route::get('/result/{type}', [NutritionController::class, 'result'])->name('result');

// Route for the home page
Route::get('/', function () {
    return view('index');
});

// Route for location page
Route::get('/Maps', function () {
    return view('location.index');
})->name('posyandu');
