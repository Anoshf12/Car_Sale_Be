<?php

use App\Http\Controllers\API\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\CustomerController;

Route::apiResource('register', RegisterController::class);
Route::apiResource('login', LoginController::class);
Route::apiResource('customers', CustomerController::class);

// Route::controller(LoginController::class)->group(function () {
//     Route::post('login', 'login');
//     Route::post('register', 'register');
//     Route::post('logout', 'logout');
//     Route::post('refresh', 'refresh');
//     Route::get('me', 'me');
// });
// Route::controller(RegisterController::class)->group(function () {
//     Route::post('login', 'login');
//     Route::post('register', 'register');
//     Route::post('logout', 'logout');
//     Route::post('refresh', 'refresh');
//     Route::get('me', 'me');

// });
// Route::post('register', 'API\RegisterController@register');
// Route::post('login', 'API\RegisterController@login');
// Route::middleware('auth:api')->group( function () {
//     Route::resource('products', 'API\ProductController');
// });
