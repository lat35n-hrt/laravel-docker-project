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
    Route::get('/{product}/edit', [MyController::class, 'edit'])->where('product', '[0-9]+')->name('products.edit');
    Route::put('/{product}', [MyController::class, 'update'])->where('product', '[0-9]+')->name('products.update');
    Route::delete('/{product}', [MyController::class, 'destroy'])->where('product', '[0-9]+')->name('products.destroy');
});
