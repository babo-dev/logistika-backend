<?php

use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\CompanyController as AdminCompanyController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TechniqueTypeController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\PageController;
/* use Illuminate\Http\Request; */
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function () {
  // Route::post('/login', [AdminController::class, 'login']);
  // Route::post('/register', [AdminController::class, 'register']);
  Route::post('/logout', [AdminController::class, 'logout']);
  Route::post('/refresh', [AdminController::class, 'refresh']);
  Route::get('/admin-profile', [AdminController::class, 'adminProfile']);
});

// Admin user routes start
Route::get('/users', [AdminUserController::class, 'index']);
Route::get('/users/{id}', [AdminUserController::class, 'show']);
Route::post('/users/{id}', [AdminUserController::class, 'update']);
Route::delete('/users/{id}', [AdminUserController::class, 'destroy']);
// Admin user routes end


// Admin company routes start
Route::get('/companies', [AdminCompanyController::class, 'index']);
Route::get('/companies/{id}', [AdminCompanyController::class, 'show']);
Route::get('/companies/company-accept/{id}', [AdminCompanyController::class, 'company_accept']);
Route::post('/companies/{id}', [AdminCompanyController::class, 'update']);
Route::delete('/companies/{id}', [AdminCompanyController::class, 'destroy']);
// Admin company routes end


// TechniqueType routes
Route::get('technique-types/', [TechniqueTypeController::class, 'index'])->name('technique-types.index');
Route::get('technique-types/{id}', [TechniqueTypeController::class, 'show'])->name('technique-types.show');
Route::post('technique-types/', [TechniqueTypeController::class, 'store'])->name('technique-types.store');
Route::delete('technique-types/{id}', [TechniqueTypeController::class, 'destroy'])->name('technique-types.destroy');
/* Route::put('technique-types/{id}', [TechniqueTypeController::class, 'update'])->name('technique-types.update'); */
Route::get('techniques-by-type/{id}', [TechniqueTypeController::class, 'techniquesByType'])->name('techniques-by-type');


// Slider routes
Route::get('sliders/', [SliderController::class, 'index']);
Route::post('sliders/', [SliderController::class, 'store']);
Route::post('sliders/update/{id}', [SliderController::class, 'update']);
Route::get('sliders/{id}', [SliderController::class, 'show']);
Route::delete('sliders/{id}', [SliderController::class, 'destroy']);

// Page routes
Route::get('pages/', [PageController::class, 'index']);
Route::post('pages/', [PageController::class, 'store']);
Route::put('pages/{id}', [PageController::class, 'update']);
Route::get('pages/{id}', [PageController::class, 'show']);
Route::delete('pages/{id}', [PageController::class, 'destroy']);

// State routes
Route::get('state/', [StateController::class, 'index']);
Route::post('state/', [StateController::class, 'store']);
Route::get('state/{id}', [StateController::class, 'show']);
Route::delete('state/{id}', [StateController::class, 'destroy']);


// Country routes
Route::get('countries/', [CountryController::class, 'index']);
Route::post('countries/', [CountryController::class, 'store']);
Route::get('countries/{id}', [CountryController::class, 'show']);
Route::delete('countries/{id}', [CountryController::class, 'destroy']);
