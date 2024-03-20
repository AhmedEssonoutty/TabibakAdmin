<?php

namespace App\Constants;
use App\Traits\ConstantsTrait;

enum ComplaintTypeConstants : int
{
    use ConstantsTrait;

    case OFFENSIVE = 1;
    case WRONG_INFORMATION = 2;
    case SPAM = 3;

    public static function getLabels($value): string
    {
        return match ($value) {
            self::OFFENSIVE->value => __('messages.offensive'),
            self::WRONG_INFORMATION->value => __('messages.wrong_information'),
            self::SPAM->value => __('messages.spam')
        };
    }

    public function label(): string
    {
        return self::getLabels($this->value);
    }
}
