<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\CustomerController;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\LendedController;
use App\Http\Controllers\API\TransactionController;

/* Used for the Login and Registration of the Admin*/
Route::apiResource('register', RegisterController::class);
Route::apiResource('login', LoginController::class);


/* CRUDS */
Route::apiResource('lendeds', LendedController::class);
Route::apiResource('transactions', TransactionController::class);
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
// Route::middleware('auth:api')->group( function () {
//     Route::resource('products', 'API\ProductController');
// });
