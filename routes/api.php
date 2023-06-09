<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
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

Route::post('/register', [App\Http\Controllers\Api\AuthController::class, 'register']);
Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () 
{
    Route::post('/logout', [App\Http\Controllers\Api\AuthController::class, 'logout']);
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});

Route::get('products', [App\Http\Controllers\ProductController::class, 'index']);
Route::get('products/{id}', [App\Http\Controllers\ProductController::class, 'show']);
Route::post('products',[App\Http\Controllers\ProductController::class, 'store']);
Route::post('pictures',[App\Http\Controllers\ProductController::class, 'pictures']);
Route::put('products/{id}',[App\Http\Controllers\ProductController::class, 'update']);
Route::delete('products/{id}',[App\Http\Controllers\ProductController::class, 'delete']);

Route::post('orders',[App\Http\Controllers\OrderController::class, 'store']);


/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
