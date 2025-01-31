<?php
use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [MyController::class, 'index'])->name('products.index');
Route::get('/products/create', [MyController::class, 'create'])->name('products.create');
Route::post('/products', [MyController::class, 'store'])->name('products.store');
Route::get('/products/{product}', [MyController::class, 'show'])->name('products.show');