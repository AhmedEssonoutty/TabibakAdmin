<?php

namespace App\Http\Controllers\Api\V1\Mobile;

use App\Http\Controllers\Api\V1\BaseApiController;
use App\Http\Requests\PatientAPIRequest;
use App\Http\Resources\UserResource;
use App\Repositories\Contracts\PatientContract;

class PatientProfileController extends BaseApiController
{
    public function __construct(PatientContract $contract)
    {
        parent::__construct($contract, UserResource::class);
    }

    public function updateMainInfo(PatientAPIRequest $request)
    {
        $patient = auth()->user()->patient;
        $patient = $this->contract->update($patient, $request->validated());
        $user = $patient->user->load('patient');
        return $this->respondWithModel($user);
    }

}
