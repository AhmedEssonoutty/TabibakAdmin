<?php

use App\Http\Controllers\Dashboard\AcademicDegreeController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\MedicalSpecialityController;
use App\Http\Controllers\Dashboard\PatientController;
use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\VendorServiceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();

Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('/', HomeController::class)->name('dashboard');
    Route::resource('roles', RoleController::class);
    Route::put('roles/{role}/change-activation', [RoleController::class, 'changeActivation'])->name('roles.active');
    Route::resource('academic-degrees', AcademicDegreeController::class);
    Route::put('academic-degrees/{academicDegree}/change-activation', [AcademicDegreeController::class, 'changeActivation'])->name('academic-degrees.active');
    Route::resource('medical-specialities', MedicalSpecialityController::class);
    Route::put('medical-specialities/{medicalSpeciality}/change-activation', [MedicalSpecialityController::class, 'changeActivation'])->name('medical-specialities.active');
    Route::resource('vendor-services', VendorServiceController::class);
    Route::put('vendor-services/{vendorService}/change-activation', [VendorServiceController::class, 'changeActivation'])->name('vendor-services.active');
    Route::resource('patients', PatientController::class);
    Route::put('patients/{patient}/change-activation', [PatientController::class, 'changeActivation'])->name('patients.active');
});

