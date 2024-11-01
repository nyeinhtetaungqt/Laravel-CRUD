<?php

use App\Http\Controllers\PizzaController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return "HELLO!";
});

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{product}/delete', [ProductController::class, 'delete'])->name('product.delete');

Route::get('/pizza', [PizzaController::class, 'index'])->name('pizza.index');
Route::get('/pizza/create', [PizzaController::class, 'create'])->name('pizza.create');
Route::post('/pizza', [PizzaController::class, 'store'])->name('pizza.store');
Route::get('/pizza/{pizza}/edit', [PizzaController::class, 'edit'])->name('pizza.edit');
Route::put('/pizza/{pizza}/update', [PizzaController::class, 'update'])->name('pizza.update');
Route::delete('/pizza/{pizza}/destroy', [PizzaController::class, 'destroy'])->name('pizza.destroy');
