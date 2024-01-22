<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\Passwords\ForgetPasswordController;
use App\Http\Controllers\Auth\Passwords\ResetPasswordController;
use App\Http\Controllers\Dashboard\AcademicDegreeController;
use App\Http\Controllers\Dashboard\ArticleController;
use App\Http\Controllers\Dashboard\DoctorController;
use App\Http\Controllers\Dashboard\FaqController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\MedicalSpecialityController;
use App\Http\Controllers\Dashboard\PatientController;
use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\VendorServiceController;
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

// Login
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/', [LoginController::class, 'checkCredentials'])->name('checkCredentials');
// Reset Password
Route::prefix('password')->group(function () {
    Route::get('request', [ForgetPasswordController::class, 'requestPassword'])->name('password.request');
    Route::post('email', [ForgetPasswordController::class, 'sendEmailPassword'])->name('password.email');
    Route::get('reset-sent-successfully', [ForgetPasswordController::class, 'emailSentSuccessfully'])->name('resetEmailSentSuccessfully');
    Route::get('reset', [ResetPasswordController::class, 'resetPassword'])->name('password.reset');
    Route::post('update', [ResetPasswordController::class, 'updatePassword'])->name('password.update');
});

Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('/', HomeController::class)->name('dashboard');
    Route::get('overview', [HomeController::class, 'overview'])->name('overview');
    Route::resource('roles', RoleController::class);
    Route::put('roles/{role}/change-activation', [RoleController::class, 'changeActivation'])->name('roles.active');
    Route::resource('users', UserController::class);
    Route::put('users/{user}/change-activation', [UserController::class, 'changeActivation'])->name('users.active');
    Route::resource('academic-degrees', AcademicDegreeController::class);
    Route::put('academic-degrees/{academicDegree}/change-activation', [AcademicDegreeController::class, 'changeActivation'])->name('academic-degrees.active');
    Route::resource('medical-specialities', MedicalSpecialityController::class);
    Route::put('medical-specialities/{medicalSpeciality}/change-activation', [MedicalSpecialityController::class, 'changeActivation'])->name('medical-specialities.active');
    Route::resource('vendor-services', VendorServiceController::class);
    Route::put('vendor-services/{vendorService}/change-activation', [VendorServiceController::class, 'changeActivation'])->name('vendor-services.active');
    Route::resource('patients', PatientController::class);
    Route::put('patients/{patient}/change-activation', [PatientController::class, 'changeActivation'])->name('patients.active');
    Route::resource('articles', ArticleController::class);
    Route::put('articles/{article}/change-activation', [ArticleController::class, 'changeActivation'])->name('articles.active');
    Route::put('articles/{id}/publish', [ArticleController::class, 'publish'])->name('articles.publish');
    Route::resource('faqs', FaqController::class);
    Route::put('faqs/{faq}/change-activation', [FaqController::class, 'changeActivation'])->name('faqs.active');
    Route::resource('doctors', DoctorController::class);
    Route::put('doctors/{doctor}/change-activation', [DoctorController::class, 'changeActivation'])->name('doctors.active');
});

