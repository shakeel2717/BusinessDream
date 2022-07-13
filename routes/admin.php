<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ReportController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('auth', 'admin')->name('admin.')->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::controller(ReportController::class)->name("report.")->group(function () {
        Route::get('/tids/pending', 'pendingTids')->name('pending.tids');
        Route::get('/users', 'users')->name('users');
    });
});
