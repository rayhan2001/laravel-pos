<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/registration', [AuthController::class, 'userRegistration']);
Route::post('/login', [AuthController::class, 'userLogin']);
Route::post('/send-otp', [AuthController::class, 'sendOTP']);
Route::post('/verify-otp', [AuthController::class, 'verifyOTP']);

Route::group(['middleware' => ['TokenVerificationMiddleware']], function () {
    Route::post('/reset-password', [AuthController::class, 'ResetPass']);
});
