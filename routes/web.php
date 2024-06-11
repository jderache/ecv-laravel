<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ManagerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('index');
    Route::prefix('/client')->name('client.')->controller(ClientController::class)->group(function () {
        Route::get('/', 'admin')->name('index');
        Route::get('/new', 'create')->name('create');
        Route::post('/new', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::post('/{id}/edit', 'update');
    });
    Route::prefix('/developer')->name('developer.')->controller(DeveloperController::class)->group(function () {
        Route::get('/', 'admin')->name('index');
        Route::get('/new', 'create')->name('create');
        Route::post('/new', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::post('/{id}/edit', 'update');
    });
    Route::prefix('/manager')->name('manager.')->controller(ManagerController::class)->group(function () {
        Route::get('/', 'admin')->name('index');
        Route::get('/new', 'create')->name('create');
        Route::post('/new', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::post('/{id}/edit', 'update');
    });
    Route::prefix('/project')->name('project.')->controller(ProjectController::class)->group(function () {
        Route::get('/', 'admin')->name('index');
        Route::get('/new', 'create')->name('create');
        Route::post('/new', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::post('/{id}/edit', 'update');
    });
    Route::prefix('/task')->name('task.')->controller(TaskController::class)->group(function () {
        Route::get('/', 'admin')->name('index');
        Route::get('/new', 'create')->name('create');
        Route::post('/new', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::post('/{id}/edit', 'update');
    });
});

Route::prefix('/client')->name('client.')->controller(ClientController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{id}', 'show')->name('show');
});

Route::prefix('/developer')->name('developer.')->controller(DeveloperController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{id}', 'show')->name('show');
});

Route::prefix('/manager')->name('manager.')->controller(ManagerController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{id}', 'show')->name('show');
});

Route::prefix('/project')->name('project.')->controller(ProjectController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{id}', 'show')->name('show');
});

Route::prefix('/task')->name('task.')->controller(TaskController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{id}', 'show')->name('show');
});
