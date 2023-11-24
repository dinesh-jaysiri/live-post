<?php


use Illuminate\Support\Facades\Route;

Route::middleware([])->name('users.')->group(function () {
    Route::get('/users', [\App\Http\Controllers\UserController::class, 'index'])->name('index');

    Route::get('/users/{user}', [\App\Http\Controllers\UserController::class, 'show'])->name('show');

    Route::post('/users', [\App\Http\Controllers\UserController::class, 'store'])->name('store');

    Route::patch('/users/{user}', [\App\Http\Controllers\UserController::class, 'update'])->name('update');

    Route::delete('/users/{user}', [\App\Http\Controllers\UserController::class, 'destroy'])->name('destroy');

});

