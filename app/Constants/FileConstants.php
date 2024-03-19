<?php

namespace App\Constants;

use App\Traits\ConstantsTrait;

enum FileConstants: string
{
    use ConstantsTrait;
    case FILE_USER_AVATAR = 'user_avatar';
    case FILE_DOCTOR_ATTACHMENTS = 'doctor_attachments';
    case FILE_TYPE_ARTICLE_MAIN_IMAGE = 'article_main_image';

    case FILE_TYPE_ARTICLE_IMAGES = 'article_images';
    case FILE_TYPE_CONSULTATION_ATTACHMENTS = 'consultation_attachments';

    public static function fileableTypes(): array
    {
        return [
            'User',
            'Doctor',
            'Consultation'
        ];
    }
}
