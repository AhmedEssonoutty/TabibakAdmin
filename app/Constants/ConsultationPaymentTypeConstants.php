<?php

namespace App\Constants;
use App\Traits\ConstantsTrait;

enum ConsultationPaymentTypeConstants : int
{
    use ConstantsTrait;

    case TABBY = 1;
    case INSURANCE = 2;

    public static function getLabels($value): string|null
    {
        return match ($value) {
            self::TABBY => __('messages.tabby'),
            self::INSURANCE => __('messages.insurance'),
            'default' => '',
        };
    }

    public function label(): string|null
    {
        return self::getLabels($this);
    }
}
