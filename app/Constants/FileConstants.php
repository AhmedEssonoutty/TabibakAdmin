<?php

namespace App\Constants;

use App\Traits\ConstantsTrait;

enum FileConstants: string
{
    use ConstantsTrait;
    case FILE_USER_AVATAR = 'user_avatar';
    case FILE_DOCTOR_ATTACHMENTS = 'doctor_attachments';

    public static function fileableTypes(): array
    {
        return [
            'User',
            'Doctor',
        ];
    }
}
