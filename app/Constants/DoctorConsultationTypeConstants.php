<?php

namespace App\Constants;
use App\Traits\ConstantsTrait;

enum DoctorConsultationTypeConstants : int
{
    use ConstantsTrait;

    case INSTANT = 1;
    case BOOKED = 2;
}
