<?php

namespace App\Constants;
use App\Traits\ConstantsTrait;

enum DoctorRequestStatusConstants : int
{
    use ConstantsTrait;

    case PENDING = 1;
    case APPROVED = 2;
    case REJECTED = 3;
}
