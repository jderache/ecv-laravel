<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('/task')->name('task.')->controller(TaskController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/new', 'create')->name('create');
    Route::post('/new', 'store')->name('store');
    Route::get('/{name}-{firstname}', 'show')->where(['name' => '[a-z0-9\-]+', 'firstname' => '[a-z0-9\-]+'])->name('show');
    Route::get('/{name}-{firstname}/edit', 'edit')->name('edit');
    Route::post('/{name}-{firstname}/edit', 'update');
});