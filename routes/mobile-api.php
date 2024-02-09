<?php

use App\Http\Controllers\Api\V1\Mobile\ArticleController;
use App\Http\Controllers\Api\V1\Mobile\AuthController;

Route::post('register-user-as-patient', [AuthController::class, 'registerUserAsPatient']);
Route::post('send-verification-code', [AuthController::class, 'sendVerificationCode']);
Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], static function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::apiResource('articles', ArticleController::class)->only('index', 'show');
    Route::post('articles/{article}/toggle-like', [ArticleController::class, 'toggleLike']);
});
