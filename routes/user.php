<?php

/* use Illuminate\Http\Request; */
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\CustomRequestController;

// Auth for company and user and for admin)
Route::post('/login', [UserController::class, 'login'])->name('login');


/* Route::apiResource('requests', CustomRequestController::class)->except(['show']); */
Route::get('requests/all', [CustomRequestController::class, 'all'])->name('requests.all');
Route::get('requests/', [CustomRequestController::class, 'index'])->name('requests.index');
Route::get('requests/{id}', [CustomRequestController::class, 'show'])->name('requests.show');
Route::get('requests/{id}/answers', [CustomRequestController::class, 'offers']);
Route::post('requests/', [CustomRequestController::class, 'store'])->name('requests.store');
Route::put('requests/{id}', [CustomRequestController::class, 'update'])->name('requests.update');
Route::delete('requests/{id}', [CustomRequestController::class, 'destroy'])->name('requests.destroy');
Route::get('requests/{id}/answersCancel', [CustomRequestController::class, 'answersCancel']);
Route::get('requests/status/0', [CustomRequestController::class, 'statusWaiting']);
Route::get('requests/status/1', [CustomRequestController::class, 'statusAnswered']);


Route::group(['prefix' => 'user'], function () {
  Route::post('/register', [UserController::class, 'register']);
  Route::post('/logout', [UserController::class, 'logout']);
  Route::post('/refresh', [UserController::class, 'refresh']);
  Route::post('/update', [UserController::class, 'update']);
  Route::get('/user-profile', [UserController::class, 'userProfile']);

  Route::get('/images', [UserController::class, 'images']);

});
