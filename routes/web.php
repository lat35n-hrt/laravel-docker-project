<?php
use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [MyController::class, 'index'])->name('products.index'); // Example route
Route::get('/products/{product}', [MyController::class, 'show'])->name('products.show');