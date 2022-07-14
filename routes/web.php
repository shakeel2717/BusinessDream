<?php

use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\PlanActivateController;
use App\Http\Controllers\user\WithdrawController;
use Illuminate\Support\Facades\Route;


Route::redirect('/', '/user/dashboard');

Route::prefix('user')->middleware('auth','user')->name('user.')->group(function(){
    Route::resource('dashboard', DashboardController::class);
    Route::resource('plan', PlanActivateController::class);
    Route::resource('withdraw', WithdrawController::class);
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
