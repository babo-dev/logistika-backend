<?php

/* use Illuminate\Http\Request; */
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\CompanyController;
use App\Http\Controllers\CustomRouteController;
use App\Http\Controllers\RequestAnswersController;
use App\Http\Controllers\TechniqueController;

header('Access-Control-Allow-Origin:  *');
// Technique routes for company
Route::get('techniques/', [TechniqueController::class, 'index'])->name('techniques.index');
Route::get('techniques/all', [TechniqueController::class, 'all'])->name('techniques.all');
Route::post('techniques/', [TechniqueController::class, 'store'])->name('techniques.store');
Route::get('techniques/{id}', [TechniqueController::class, 'show'])->name('techniques.show');
Route::delete('techniques/{id}', [TechniqueController::class, 'destroy'])->name('techniques.destroy');
Route::post('techniques/{id}', [TechniqueController::class, 'update'])->name('techniques.update');
Route::get('techniques/{id}/images/', [TechniqueController::class, 'images'])->name('techniques.images');

/* Route::apiResource('routes', CustomRouteController::class); */
// Routes routes for company
Route::get('routes/all', [CustomRouteController::class, 'all'])->name('routes.all');
Route::get('routes/', [CustomRouteController::class, 'index'])->name('routes.index');
Route::get('routes/{id}', [CustomRouteController::class, 'show'])->name('routes.show');
Route::post('routes/', [CustomRouteController::class, 'store'])->name('routes.store');
Route::delete('routes/{id}', [CustomRouteController::class, 'destroy'])->name('routes.delete');
Route::put('routes/{id}', [CustomRouteController::class, 'update'])->name('routes.update');

// RequestAnswers routes
Route::get('request-answers/all', [RequestAnswersController::class, 'all']);
Route::get('request-answers/', [RequestAnswersController::class, 'index']);
Route::get('request-answers/{id}', [RequestAnswersController::class, 'show']);
Route::post('request-answers/', [RequestAnswersController::class, 'store']);
Route::delete('request-answers/{id}', [RequestAnswersController::class, 'destroy']);
Route::put('request-answers/{id}', [RequestAnswersController::class, 'update']);
Route::get('request-answers/{id}/accept', [RequestAnswersController::class, 'accept']);
Route::get('request-answers/{id}/cancel', [RequestAnswersController::class, 'cancel']);


Route::group(['prefix' => 'company'], function () {
  Route::post('/register', [CompanyController::class, 'register']);
  Route::post('/logout', [CompanyController::class, 'logout']);
  Route::post('/refresh', [CompanyController::class, 'refresh']);
  Route::post('/update', [CompanyController::class, 'update']);
  Route::get('/company-profile', [CompanyController::class, 'companyProfile']);

  Route::get('/images', [CompanyController::class, 'images']);
});
