<?php

namespace App\Constants;
use App\Traits\ConstantsTrait;

enum ConsultationContactTypeConstants : int
{
    use ConstantsTrait;

    case AUDIO = 1;
    case VIDEO = 2;
    case CHAT = 3;

    public static function getLabels($value): string
    {
        return match ($value) {
            self::AUDIO => __('messages.audio'),
            self::VIDEO => __('messages.video'),
            self::CHAT => __('messages.chat')
        };
    }

    public function label(): string
    {
        return self::getLabels($this);
    }
}
