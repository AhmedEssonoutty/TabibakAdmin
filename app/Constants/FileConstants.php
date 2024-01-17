<?php

namespace App\Constants;

use App\Traits\ConstantsTrait;

enum FileConstants: string
{
    use ConstantsTrait;
    case FILE_USER_AVATAR = 'user_avatar';

    public static function fileableTypes(): array
    {
        return [
            'User',
        ];
    }
}
