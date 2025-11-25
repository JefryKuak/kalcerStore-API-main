<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FavoritController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;

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
Route::patch('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);

// FAVORIT
Route::get('/favorit', [FavoritController::class, 'index']);
Route::get('/favorit/user/{id}', [FavoritController::class, 'byUser']);
Route::post('/favorit', [FavoritController::class, 'store']);
Route::delete('/favorit/{id}', [FavoritController::class, 'destroy']);
Route::post('/favorit/delete', [FavoritController::class, 'deleteByProduct']);

// REVIEW
Route::get('/reviews', [ReviewController::class, 'index']);
Route::get('/reviews/{id}', [ReviewController::class, 'show']);
Route::post('/reviews', [ReviewController::class, 'store']);
Route::put('/reviews/{id}', [ReviewController::class, 'update']);
Route::delete('/reviews/{id}', [ReviewController::class, 'destroy']);


// ORDER
Route::get('/orders', [OrderController::class, 'index']);
Route::get('/orders/{id}', [OrderController::class, 'show']);
Route::post('/orders', [OrderController::class, 'store']);
Route::put('/orders/{id}', [OrderController::class, 'update']);
Route::delete('/orders/{id}', [OrderController::class, 'destroy']);

// ORDER DETAIL
Route::get('/order-detail', [OrderDetailController::class, 'index']);
Route::get('/order-detail/{id}', [OrderDetailController::class, 'show']);
Route::post('/order-detail', [OrderDetailController::class, 'store']);
Route::put('/order-detail/{id}', [OrderDetailController::class, 'update']);
Route::delete('/order-detail/{id}', [OrderDetailController::class, 'destroy']);

