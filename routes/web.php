<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\OrderTidController;
use App\Http\Controllers\user\PlanActivateController;
use App\Http\Controllers\user\ProductController;
use App\Http\Controllers\user\ProfileController;
use App\Http\Controllers\user\ReportController;
use App\Http\Controllers\user\WithdrawController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LandingPageController::class, 'index'])->name('landing-page');

Route::prefix('user')->middleware('auth', 'user')->name('user.')->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('plan', PlanActivateController::class);
    Route::resource('withdraw', WithdrawController::class);
    Route::get('profile/password', [ProfileController::class, 'password'])->name('profile.password');
    Route::post('profile/password', [ProfileController::class, 'passwordStore'])->name('profile.password.update');
    Route::resource('profile', ProfileController::class);
    Route::controller(ReportController::class)->prefix('reports')->name('report.')->group(function () {
        Route::get('/transactions', 'transactions')->name('transactions');
        Route::get('/deposit', 'deposit')->name('deposit');
        Route::get('/withdraw', 'withdraw')->name('withdraw');
        Route::get('/withdraw/pending', 'withdrawPending')->name('withdraw.pending');
        Route::get('/tids', 'tids')->name('tids');
        Route::get('/plan', 'plan')->name('plan');
        Route::get('/refers', 'refers')->name('refers');
        Route::get('/tree/{user?}', 'tree')->name('tree');
        Route::get('/orders', 'orders')->name('orders');
    });
    Route::resource('product', ProductController::class);
    Route::resource('order', OrderTidController::class);
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
