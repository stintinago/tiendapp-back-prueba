<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/products',[\App\Http\Controllers\ProductController::class, 'all']);
Route::get('/product/{id}',[\App\Http\Controllers\ProductController::class, 'get']);
Route::post('/products',[\App\Http\Controllers\ProductController::class, 'create']);
Route::put('/products/{id}',[\App\Http\Controllers\ProductController::class, 'update']);
Route::delete('/products/{id}',[\App\Http\Controllers\ProductController::class, 'delete']);

Route::get('/brands',[\App\Http\Controllers\BrandController::class, 'all']);
Route::get('/brand/{id}',[\App\Http\Controllers\BrandController::class, 'get']);
Route::post('/brands',[\App\Http\Controllers\BrandController::class, 'create']);
Route::put('/brands/{id}',[\App\Http\Controllers\BrandController::class, 'update']);
Route::delete('/brands/{id}',[\App\Http\Controllers\BrandController::class, 'delete']);