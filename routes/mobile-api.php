<?php

use App\Http\Controllers\Api\V1\FilterController;
use App\Http\Controllers\Api\V1\Mobile\ArticleController;
use App\Http\Controllers\Api\V1\Mobile\AuthController;
use App\Http\Controllers\Api\V1\Mobile\ComplaintController;
use App\Http\Controllers\Api\V1\Mobile\ConsultationController;
use App\Http\Controllers\Api\V1\Mobile\DoctorController;
use App\Http\Controllers\Api\V1\Mobile\DoctorScheduleDayController;
use App\Http\Controllers\Api\V1\Mobile\FileController;
use App\Http\Controllers\Api\V1\Mobile\PatientProfileController;
use App\Http\Controllers\Api\V1\Mobile\PatientRelativeController;
use App\Http\Controllers\Api\V1\Mobile\RateController;

Route::post('register-user-as-patient', [AuthController::class, 'registerUserAsPatient']);
Route::post('send-verification-code', [AuthController::class, 'sendVerificationCode']);
Route::post('login', [AuthController::class, 'login']);

// visitors apis (not authenticated)
Route::get('filters/{model}', FilterController::class);
Route::apiResource('articles', ArticleController::class)->only('index', 'show');
Route::group(['prefix' => 'patient'], static function () {
    Route::apiResource('doctors', DoctorController::class)->only('index', 'show');
});
Route::apiResource('files', FileController::class)->only('store', 'destroy');

Route::group(['middleware' => 'auth:sanctum'], static function () {

    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('profile', [AuthController::class, 'profile']);

    Route::post('articles/{article}/toggle-like', [ArticleController::class, 'toggleLike']);

    Route::group(['prefix' => 'patient'], static function () {
        Route::put('update-main-info', [PatientProfileController::class, 'updateMainInfo']);
        Route::apiResource('relatives', PatientRelativeController::class);
        Route::apiResource('consultations', ConsultationController::class);
        Route::put('consultations/{consultation}/cancel', [ConsultationController::class, 'cancel']);
        Route::apiResource('rates', RateController::class)->only('store', 'update', 'destroy');
        Route::apiResource('complaints', ComplaintController::class)->only('store', 'show', 'update', 'destroy');
        Route::apiResource('doctor-schedule-days', DoctorScheduleDayController::class)->only('index');
    });

    Route::post('register-user-as-doctor', [AuthController::class, 'registerUserAsDoctor']);
    Route::group(['prefix' => 'doctor'], static function () {
        Route::apiResource('articles', ArticleController::class)->only('store', 'update', 'destroy');
        Route::put('articles/{article}/change-activation', [ArticleController::class, 'changeActivation'])->name('articles.active');
    });

});
