<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// Route Product
Route::GET('/apiProduk', [ProductController::class], 'index');
Route::GET('/apiProduk/{id}', [ProductController::class], 'show');
Route::POST('/apiProduk', [ProductController::class], 'store');
Route::PUT('/apiProduk/{id}', [ProductController::class], 'update');
Route::DELETE('/apiProduk/{id}', [ProductController::class], 'destroy');

// Route Users
Route::get('/dataUser', [UserController::class, 'index']);
Route::get('totalUser', [UserController::class, 'total_users']);
