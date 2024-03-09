<?php

namespace App\Http\Controllers\Api\V1\Mobile;

use App\Constants\DoctorRequestStatusConstants;
use App\Http\Controllers\Api\V1\BaseApiController;
use App\Http\Controllers\Controller;
use App\Http\Resources\DoctorResource;
use App\Http\Resources\UserResource;
use App\Repositories\Contracts\DoctorContract;

class DoctorController extends BaseApiController
{
    public function __construct(DoctorContract $contract)
    {
        parent::__construct($contract, DoctorResource::class);
        $this->defaultScopes = ['requestStatus' => DoctorRequestStatusConstants::APPROVED->value];
    }
}
