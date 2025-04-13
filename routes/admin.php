<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;



Route::prefix(env('ADMIN_URL'))  
    ->middleware([IsAdmin::class]) 
    ->name('admin.')  
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    });