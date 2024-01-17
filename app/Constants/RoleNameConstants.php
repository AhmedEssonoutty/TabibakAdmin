<?php

namespace App\Constants;
use App\Traits\ConstantsTrait;

enum RoleNameConstants : string
{
    use ConstantsTrait;
    case SUPER_ADMIN = 'Super Admin';
    case ADMIN = 'admin';
    case DOCTOR = 'doctor';
    case VENDOR = 'vendor';
    case PATIENT = 'patient';
}
