<?php

use App\Http\Controllers\user\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('user')->middleware('auth')->name('user.')->group(function(){
    Route::resource('dashboard', DashboardController::class);
});

require __DIR__.'/auth.php';
