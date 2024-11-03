<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\BottleController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

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

Route::get('/people', [PersonController::class, 'index'])->name('person.index');
Route::get('/people/create', [PersonController::class, 'create'])->name('person.create');
Route::post('/people', [PersonController::class, 'store'])->name('person.store');
Route::get('/people/{people}/edit', [PersonController::class, 'edit'])->name('person.edit');
Route::put('/people/{people}/update', [PersonController::class, 'update'])->name('person.update');
Route::delete('/people/{people}/destroy', [PersonController::class, 'destroy'])->name('person.destroy');


Route::get('/teachers', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('/teachers/create', [TeacherController::class, 'create'])->name('teacher.create');
Route::post('/teachers/store', [TeacherController::class, 'store'])->name('teacher.store');
Route::get('/teachers/{teachers}/edit', [TeacherController::class, 'edit'])->name('teacher.edit');
Route::put('/teachers/{teachers}/update', [TeacherController::class, 'update'])->name('teacher.update');
Route::delete('/teachers/{teachers}/delete', [TeacherController::class, 'delete'])->name('teacher.delete');
