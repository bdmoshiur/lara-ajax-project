<?php

use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;



Route::get('/',[TaskController::class, 'index'])->name('task.home');
Route::post('/task/store',[TaskController::class, 'store'])->name('task.store');
Route::post('/task/update/{id}',[TaskController::class, 'update'])->name('task.update');
Route::post('/task/delete/{id}',[TaskController::class, 'destroy'])->name('task.destroy');
