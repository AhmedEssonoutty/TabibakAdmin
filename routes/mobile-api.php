<?php

use App\Http\Controllers\Api\V1\FilterController;
use App\Http\Controllers\Api\V1\Mobile\ArticleController;
use App\Http\Controllers\Api\V1\Mobile\AuthController;
use App\Http\Controllers\Api\V1\Mobile\ConsultationController;
use App\Http\Controllers\Api\V1\Mobile\FileController;
use App\Http\Controllers\Api\V1\Mobile\PatientProfileController;
use App\Http\Controllers\Api\V1\Mobile\PatientRelativeController;

Route::post('register-user-as-patient', [AuthController::class, 'registerUserAsPatient']);
Route::post('send-verification-code', [AuthController::class, 'sendVerificationCode']);
Route::post('login', [AuthController::class, 'login']);
Route::get('filters/{model}', FilterController::class);

Route::group(['middleware' => 'auth:sanctum'], static function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('profile', [AuthController::class, 'profile']);

    Route::apiResource('files', FileController::class)->only('store', 'destroy');

    Route::apiResource('articles', ArticleController::class)->only('index', 'show');
    Route::post('articles/{article}/toggle-like', [ArticleController::class, 'toggleLike']);

    Route::group(['prefix' => 'patient'], static function () {
        Route::put('update-main-info', [PatientProfileController::class, 'updateMainInfo']);
        Route::apiResource('relatives', PatientRelativeController::class);
        Route::apiResource('consultations', ConsultationController::class);
    });

    Route::post('register-user-as-doctor', [AuthController::class, 'registerUserAsDoctor']);
    Route::group(['prefix' => 'doctor'], static function () {

    });

});
