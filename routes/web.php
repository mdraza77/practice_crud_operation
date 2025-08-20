<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

//Welcome page
Route::get('/', function () {
    return view('welcome');
});

// //Index page
// Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// //Open create page
// Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
// //Create page
// Route::post('/products', [ProductController::class, 'store'])->name('products.store');
// //View particular product page
// Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
// //Carry data to edit product page
// Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
// //Edit product page
// Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
// Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::resource('/products', ProductController::class);