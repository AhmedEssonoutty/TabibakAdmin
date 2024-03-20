<?php

namespace App\Constants;
use App\Traits\ConstantsTrait;

enum PatientSocialStatusConstants : int
{
    use ConstantsTrait;

    case SINGLE = 1;
    case MARRIED = 2;
    case DIVORCED = 3;
    case WIDOWED = 4;
    case ENGAGED = 5;
    case OTHER = 6;

    public static function getLabels($value): string|null
    {
        return match ($value) {
            self::SINGLE => __('messages.single'),
            self::MARRIED => __('messages.married'),
            self::DIVORCED => __('messages.divorced'),
            self::WIDOWED => __('messages.widowed'),
            self::ENGAGED => __('messages.engaged'),
            default => null
        };
    }

    public function label(): string|null
    {
        return self::getLabels($this);
    }
}
