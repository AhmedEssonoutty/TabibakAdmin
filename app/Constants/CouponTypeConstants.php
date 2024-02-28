<?php

namespace App\Constants;
use App\Traits\ConstantsTrait;

enum CouponTypeConstants : int
{
    use ConstantsTrait;

    case PERCENTAGE = 1;
    case AMOUNT = 2;

    public static function getLabels($value): string
    {
        return match ($value) {
            self::PERCENTAGE->value => __('messages.percentage'),
            self::AMOUNT->value => __('messages.amount'),
        };
    }

    public function label(): string
    {
        return self::getLabels($this->value);
    }
}
