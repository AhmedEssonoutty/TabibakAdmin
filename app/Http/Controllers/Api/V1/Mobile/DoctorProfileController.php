<?php

namespace App\Http\Controllers\Api\V1\Mobile;

use App\Http\Controllers\Api\V1\BaseApiController;
use App\Http\Requests\DoctorRequest;
use App\Http\Resources\UserResource;
use App\Repositories\Contracts\DoctorContract;

class DoctorProfileController extends BaseApiController
{
    public function __construct(DoctorContract $contract)
    {
        parent::__construct($contract, UserResource::class);
    }

    public function updateMainInfo(DoctorRequest $request)
    {
        $doctor = auth()->user()->doctor;
        $doctor = $this->contract->update($doctor, $request->validated());
        $user = $doctor->user->load('patient');
        return $this->respondWithModel($user);
    }

}
