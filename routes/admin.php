<?php

use App\Http\Controllers\admin\AddBalanceController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ReportController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('auth', 'admin')->name('admin.')->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('product', ProductController::class);
    Route::resource('balance', AddBalanceController::class);
    Route::controller(ReportController::class)->name("report.")->group(function () {
        Route::get('/tids/pending', 'pendingTids')->name('pending.tids');
        Route::get('/tids/order/pending', 'pendingOrderTids')->name('pending.order.tids');
        Route::get('/tids/all', 'allTids')->name('all.tids');
        Route::get('/users', 'users')->name('users');
        Route::get('/options', 'options')->name('options');
        Route::get('/methods', 'methods')->name('methods');
        Route::get('/orders', 'orders')->name('orders');
        Route::get('/withdraw', 'withdraw')->name('withdraw');
        Route::get('/withdraw/pending', 'withdrawPending')->name('withdraw.pending');
    });
});
