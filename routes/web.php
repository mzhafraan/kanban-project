<?php


use App\Http\Controllers\TaskController; // Ditambahkan

use Illuminate\Support\Facades\Route;



Route::get('/', function () {

    return view('home');

})->name('home');


// Route::get('/tasks/', [TaskController::class, 'index'])->name('tasks.index');


// // Ditambahkan

// Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::prefix('tasks')

    ->name('tasks.')

    ->controller(TaskController::class)

    ->group(function () {

        Route::get('/', 'index')->name('index');

        Route::get('{id}/edit', 'edit')->name('edit');

    });