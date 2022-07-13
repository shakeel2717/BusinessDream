<?php
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('auth','admin')->name('admin.')->group(function(){
    Route::resource('dashboard', DashboardController::class);
});
