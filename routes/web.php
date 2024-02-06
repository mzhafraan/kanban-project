<?php


use App\Http\Controllers\TaskController; // Ditambahkan

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    return view('home');

})->name('home');


Route::prefix('tasks')

    ->name('tasks.')

    ->controller(TaskController::class)

    ->group(function () {

        Route::get('/', 'index')->name('index');

        Route::get('{id}/edit', 'edit')->name('edit');

        Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');


    });