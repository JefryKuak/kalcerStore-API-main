<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FavoritController;

// PRODUCT CRUD
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::post('/products', [ProductController::class, 'store']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::patch('/products/{id}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);

// USER CRUD
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);

// FAVORIT
Route::get('/favorit', [FavoritController::class, 'index']);
Route::get('/favorit/user/{id}', [FavoritController::class, 'byUser']);
Route::post('/favorit', [FavoritController::class, 'store']);
Route::delete('/favorit/{id}', [FavoritController::class, 'destroy']);
Route::post('/favorit/delete', [FavoritController::class, 'deleteByProduct']);
