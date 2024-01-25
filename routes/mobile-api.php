<?php

use App\Http\Controllers\Api\V1\Mobile\AuthController;

Route::post('send-verification-code', [AuthController::class, 'sendVerificationCode']);
Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], static function () {
    Route::post('logout', [AuthController::class, 'logout']);
});
