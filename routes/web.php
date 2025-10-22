<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;  // ✅ add this line

// Default Laravel route
Route::get('/', function () {
    return view('welcome');
});

// ✅ Calculator routes
Route::get('/calculator', [CalculatorController::class, 'index']);
Route::post('/calculator', [CalculatorController::class, 'calculate'])->name('calculator.calculate');

