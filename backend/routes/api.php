<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;

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
// loginUser es el metodo
Route::post('/login', [LoginController::class, 'loginUser']);

//create-user es el metodo
Route::post('/create-user', [RegisterController::class, 'createUser']);

//getProducts es el metodo
Route::get('/products', [ProductController::class, 'getProducts']);

//createProduct es el metodo
Route::post('/create-product', [ProductController::class, 'createProduct']);

//showProduct es el metodo
Route::get('/products/{id}', [ProductController::class, 'showProduct']);

//update es el metodo
Route::put('/products/{id}', [ProductController::class, 'updateProduct']);

//deleteProduct es el metodo
Route::delete('/products/{id}', [ProductController::class, 'deleteProduct']);