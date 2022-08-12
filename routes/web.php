<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StockController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/viewsProduct', function () {
    return view('viewsProduct');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/products/index', [ProductController::class, 'index'])->name('products.index');

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');

Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');

Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

// Route::resource('products', ProductController::class);

//controlador stockController

Route::get('/stock/index', [StockController::class, 'index'])->name('stock.index');

Route::get('/stock/create', [StockController::class, 'create'])->name('stock.create');

Route::post('/stock', [StockController::class, 'store'])->name('stock.store');

Route::get('/stock/{id}', [StockController::class, 'show'])->name('stock.show');

Route::get('/stock/{id}/edit', [StockController::class, 'edit'])->name('stock.edit');

Route::put('/stock/{id}', [StockController::class, 'update'])->name('stock.update');

Route::delete('/stock/{id}', [StockController::class, 'destroy'])->name('stock.destroy');

