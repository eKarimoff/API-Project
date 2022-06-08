<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\RegisterController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/create',[RegisterController::class,'create']); // create a new user
Route::apiResource('categories', 'App\Http\Controllers\CategoryController');
// Route::get('/categories',[CategoryController::class,'category']); 
Route::get('/products',[ProductController::class,'products']); 
Route::get('/my-orders',[OrderController::class,'myOrders']); 