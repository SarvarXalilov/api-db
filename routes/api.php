<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);
Route::post('register', [AuthController::class, 'register']);
ROute::get('user', [AuthController::class, 'user'])->middleware('auth:sanctum');

Route::apiResources([
    'categories' => CategoryController::class,
    'products' => ProductController::class,
    'categories.products' => CategoryProductController::class,
    'favorites' => FavoriteController::class,
]);
