<?php

namespace App\Http\Controllers\Api\V1\Mobile;

use App\Http\Controllers\Api\V1\BaseApiController;
use App\Http\Requests\LoginRequest;
use App\Http\Resources\UserResource;
use App\Repositories\Contracts\UserContract;
use App\Services\Repositories\UserAuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends BaseApiController
{
    private UserAuthService $userAuthService;
    public function __construct(UserContract $userContract, UserAuthService $userAuthService)
    {
        parent::__construct($userContract, UserResource::class);
        $this->userAuthService = $userAuthService;
    }

    public function sendVerificationCode(Request $request)
    {
        $request->validate([
            'phone' => config('validations.phone.req')
        ]);
        $existedUser = $this->contract->findBy('phone', $request->phone);
        if ($existedUser){
            $existedUser = $this->userAuthService->sendVerificationCode($existedUser);
            return $this->respondWithSuccess('', ['verification_code' => $existedUser->verification_code]);
        }else{
            return $this->respondWithError(__('auth.failed'), 401);
        }
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt(['phone' => $request->phone, 'verification_code' => $request->verification_code])) {
            $user = Auth::user();
            $user = $this->userAuthService->verifyUser($user);
            $user->api_token = $this->userAuthService->createToken($user, $request->validated());
            return $this->respondWithModel($user);
        }else{
            return $this->respondWithError(__('auth.failed'), 401);
        }
    }

    public function logout()
    {
        $user = Auth::user();
        $user->tokens()->delete();
        $this->userAuthService->setUserAsNotVerified($user);
        return $this->respondWithSuccess();
    }
}
