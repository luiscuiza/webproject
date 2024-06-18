<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(ProductController::class)->group(function() {
        Route::get('product', 'index')->name('product.index');
        Route::get('product/create', 'create')->name('product.create');
        Route::get('product/show/{id_prod}', 'show')->name('product.show');
        Route::get('product/edit/{id_prod}', 'edit')->name('product.edit');
        Route::post('product/store', 'store')->name('product.store');
        Route::put('product/update/{product}', 'update')->name('product.update');
        Route::delete('product/destroy/{id_prod}', 'destroy')->name('product.destroy');
    });
    
});