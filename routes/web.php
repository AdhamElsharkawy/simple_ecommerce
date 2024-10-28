<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StockReportController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::get('/', [StockReportController::class, 'index'])->name('dashboard');
