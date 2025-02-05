<?php

use App\Http\Controllers\MyController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/products', [MyController::class, 'index'])->name('products.index');
    Route::get('/products/create', [MyController::class, 'create'])->name('products.create');
    Route::post('/products', [MyController::class, 'store'])->name('products.store');
    Route::get('/products/{product}', [MyController::class, 'show'])->where('product', '[0-9]+')->name('products.show');
    Route::get('/products/{product}/edit', [MyController::class, 'edit'])->where('product', '[0-9]+')->name('products.edit');
    Route::put('/products/{product}', [MyController::class, 'update'])->where('product', '[0-9]+')->name('products.update');
    Route::delete('/products/{product}', [MyController::class, 'destroy'])->where('product', '[0-9]+')->name('products.destroy');
});

require __DIR__.'/auth.php';
