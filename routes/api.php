<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/registration', [AuthController::class, 'userRegistration']);
Route::post('/login', [AuthController::class, 'userLogin']);
