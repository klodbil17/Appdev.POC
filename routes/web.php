<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\Admin\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    });

    Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    Route::resource('products', \App\Http\Controllers\Admin\ProductController::class);
    Route::resource('orders', \App\Http\Controllers\Admin\OrderController::class)->except(['destroy', 'store', 'create']);
    Route::put('/products/{id}/archive', [\App\Http\Controllers\Admin\ProductController::class, 'archive'])->name('products.archive');
    Route::put('/products/{id}/restore', [\App\Http\Controllers\Admin\ProductController::class, 'restore'])->name('products.restore');
    Route::resource('products', \App\Http\Controllers\Admin\ProductController::class);
});
