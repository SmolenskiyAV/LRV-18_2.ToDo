<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', function () {
    //return view('welcome');
    return view('/ToDo/home');
})->name('home');

Route::get('/todo/list', [TodoController::class, 'show'])->name('list');

Route::get('/todo/create', function () {
    //return view('welcome');
    return view('/ToDo/create');
})->name('create');

Route::post('/todo/create/submit',[TodoController::class, 'add'])->name('submit');

Route::get('/todo/{id}', [TodoController::class, 'edit'])->name('edit');

Route::get('/todo/{id}/update', [TodoController::class, 'update'])->name('update');

Route::post('/todo/{id}/update', [TodoController::class, 'updateSubmit'])->name('updateSubmit');

Route::get('/todo/{id}/delete', [TodoController::class, 'delete'])->name('delete');
/*
Route::get('/todo',[\App\Http\Controllers\TodoController::class, 'add']);
Route::post('/todo/create',[\App\Http\Controllers\TodoController::class, 'create']);

Route::get('/todo/{task}', [\App\Http\Controllers\TodoController::class, 'edit']);
Route::post('/todo/{task}', [\App\Http\Controllers\TodoController::class, 'update']);
*/
