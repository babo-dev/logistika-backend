<?php

/* use Illuminate\Http\Request; */

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\EmailVerificationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\NewPasswordContoller;

// Auth for company and user and for admin)
Route::post("/login", [UserController::class, "login"])->name("login");

// Image routes
// Route::apiResource('images', ImageController::class)->only(['store', 'update', 'destroy']);
Route::post("images", [ImageController::class, "store"]);
Route::delete("images", [ImageController::class, "destroy"]);
Route::put("images/{id}", [ImageController::class, "update"]);

Route::get("home", [HomeController::class, "index"]);
Route::post("search", [HomeController::class, "search"]);

Route::post('email/verification-notification', [EmailVerificationController::class, 'sendVerificationEmail']);
Route::get('verify-email/{type}/{id}/{hash}', [EmailVerificationController::class, 'verify'])->name('verification.verify');

Route::post('forgot-password', [NewPasswordContoller::class, 'forgotPassword']);
Route::post('reset-password', [NewPasswordContoller::class, 'reset'])->name('password.reset');
