<?php
use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('products')->group(function () {
    Route::get('/', [MyController::class, 'index'])->name('products.index');
    Route::get('/create', [MyController::class, 'create'])->name('products.create');
    Route::post('/', [MyController::class, 'store'])->name('products.store');
    Route::get('/{product}', [MyController::class, 'show'])->where('product', '[0-9]+')->name('products.show'); // ID is numeric
});
