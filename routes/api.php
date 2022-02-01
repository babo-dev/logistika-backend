<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\CompanyController;
use App\Http\Controllers\Auth\UserController;

// Route::group(['prefix' => 'auth'],function () {


// });

Route::group(['prefix' => 'company'],function () {
    Route::post('/login', [CompanyController::class, 'login']);
    Route::post('/register', [CompanyController::class, 'register']);
    Route::post('/logout', [CompanyController::class, 'logout']);
    Route::post('/refresh', [CompanyController::class, 'refresh']);
    Route::get('/company-profile', [CompanyController::class, 'companyProfile']); 
});

Route::group(['prefix' => 'user'],function () {
    Route::post('/login', [UserController::class, 'login']);
    Route::post('/register', [UserController::class, 'register']);
    Route::post('/logout', [UserController::class, 'logout']);
    Route::post('/refresh', [UserController::class, 'refresh']);
    Route::get('/user-profile', [UserController::class, 'userProfile']); 
});