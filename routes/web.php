<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', [UserController::class , 'index'])->name('index');

Route::get('/users/create', [UserController::class , 'create'] )->name('users.create');

Route::post('/users/store' , [UserController::class , 'store'] )->name('users.store');

Route::get('/users/{users}/edit' , [UserController::class , 'edit'] )->name('users.edit');

Route::put('/users/{users}' , [UserController::class , 'update'] )->name('users.update');

Route::delete('/users/{user}', [UserController::class , 'destroy'] )->name('users.destroy');

Route::get('/info/{user}', [UserController::class , 'show'] )->name('user.info');
