<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeController;


Route::get('/', [StudentController::class,'index'])->name('index');
Route::get('/index', [StudentController::class,'index'])->name('index');
Route::get('/create', [StudentController::class,'create'])->name('create');
Route::get('/store', [StudentController::class, 'store'])->name('store');
Route::get('/edit/{id}', [StudentController::class,'edit'])->name('edit');
Route::put('/update/{id}', [StudentController::class,'update'])->name('update');
Route::post('/delete/{id}', [StudentController::class, 'delete'])->name('delete');
