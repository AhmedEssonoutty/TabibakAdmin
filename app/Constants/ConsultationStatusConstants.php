<?php

namespace App\Constants;
use App\Traits\ConstantsTrait;

enum ConsultationStatusConstants : int
{
    use ConstantsTrait;

    case PENDING = 1;
    case CANCELLED = 2;

    public static function getLabels($value): string|null
    {
        return match ($value) {
            self::PENDING => __('messages.pending'),
            self::CANCELLED => __('messages.cancelled'),
            default => null
        };
    }

    public function label(): string|null
    {
        return self::getLabels($this);
    }
}
