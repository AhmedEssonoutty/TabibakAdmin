<?php

namespace App\Constants;
use App\Traits\ConstantsTrait;

enum ConsultationTypeConstants : int
{
    use ConstantsTrait;

    case URGENT = 1;
    case WITH_APPOINTMENT = 2;

    public static function getLabels($value): string
    {
        return match ($value) {
            self::URGENT => __('messages.urgent'),
            self::WITH_APPOINTMENT => __('messages.with_appointment'),
        };
    }

    public function label(): string
    {
        return self::getLabels($this);
    }
}
