<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\CustomerController;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\LendedController;
use App\Http\Controllers\API\TransactionController;
use App\Http\Controllers\API\VehicleController;

/* Used for the Login and Registration of the Admin*/
Route::apiResource('register', RegisterController::class);
Route::apiResource('login', LoginController::class);


/* CRUDS */
Route::apiResource('lendeds', LendedController::class);
Route::apiResource('transactions', TransactionController::class);
Route::apiResource('customers', CustomerController::class);
Route::apiResource('vehicles', VehicleController::class);
