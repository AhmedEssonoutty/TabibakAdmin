<?php

namespace App\Constants;
use App\Traits\ConstantsTrait;

enum ConsultationPaymentTypeConstants : int
{
    use ConstantsTrait;

    case TABBY = 1;
    case INSURANCE = 2;

    public static function getLabels($value): string
    {
        return match ($value) {
            self::TABBY => __('messages.tabby'),
            self::INSURANCE => __('messages.insurance')
        };
    }

    public function label(): string
    {
        return self::getLabels($this);
    }
}
