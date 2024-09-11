<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/option1', [DashboardController::class, 'showOption1'])->name('dashboard.option1');
Route::get('/dashboard/option2', [DashboardController::class, 'showOption2'])->name('dashboard.option2');
Route::get('/dashboard/option3', [DashboardController::class, 'showOption3'])->name('dashboard.option3');
Route::get('/dashboard/option4', [DashboardController::class, 'showOption4'])->name('dashboard.option4');
Route::get('/dashboard/option5', [DashboardController::class, 'showOption5'])->name('dashboard.option5');
