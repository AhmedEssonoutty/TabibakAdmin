<?php

namespace App\Constants;
use App\Traits\ConstantsTrait;

enum ConsultationStatusConstants : int
{
    use ConstantsTrait;

    case PENDING = 1;
    case CANCELLED = 2;

    public static function getLabels($value): string
    {
        return match ($value) {
            self::PENDING => __('messages.pending'),
            self::CANCELLED => __('messages.cancelled')
        };
    }

    public function label(): string
    {
        return self::getLabels($this);
    }
}
