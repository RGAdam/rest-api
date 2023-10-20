<?php

use App\Http\Controllers\Api\V1\AddressController;
use App\Http\Controllers\Api\V1\LoginController;
use App\Http\Controllers\Api\V1\StudentController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1',], function () {
    Route::post('login', [LoginController::class, 'login']);
    Route::delete('logout', [LoginController::class, 'logout']);

    Route::apiResource('students', StudentController::class); //->middleware(['auth:sanctum']);
    Route::apiResource('addresses', AddressController::class); //->middleware(['auth:sanctum']);
});
