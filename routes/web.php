<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\BottleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;



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


Route::get('/student', [StudentController::class, 'index'])->name('student.index');
Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/student', [StudentController::class, 'store'])->name('student.store');
Route::get('/student/{student}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/student/{student}/update', [StudentController::class, 'update'])->name('student.update');
Route::delete('/student/{student}/delete', [StudentController::class, 'delete'])->name('student.delete');



Route::get('/bottle', [BottleController::class, 'index'])->name('bottle.index');
Route::get('/bottle/create', [BottleController::class, 'create'])->name('bottle.create');
Route::post('/bottle', [BottleController::class, 'store'])->name('bottle.store');
Route::get('/bottle/{bottle}/edit', [BottleController::class, 'edit'])->name('bottle.edit');
Route::put('/bottle/{bottle}/update', [BottleController::class, 'update'])->name('bottle.update');
Route::delete('/bottle/{bottle}/delete', [BottleController::class, 'delete'])->name('bottle.delete');
