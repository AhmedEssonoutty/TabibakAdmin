<?php

namespace App\Constants;
use App\Traits\ConstantsTrait;

enum ConsultationVendorStatusConstants : Int
{
    use ConstantsTrait;

    case PENDING = 1;
    case ACCEPTED = 2;
    case REJECTED = 3;

    public function getLabels($value):string
    {
        return match ($value) {
            self::PENDING => __('messages.pending'),
            self::ACCEPTED => __('messages.accepted'),
            self::REJECTED => __('messages.rejected'),
        };
    }

    public function label(): string
    {
        return self::getLabels($this);
    }

    public static function getColors($value):string
    {
        return match ($value) {
            self::PENDING => 'warning',
            self::ACCEPTED => 'success',
            self::REJECTED => 'danger',
        };
    }

    public function color(): string
    {
        return self::getColors($this);
    }
}
