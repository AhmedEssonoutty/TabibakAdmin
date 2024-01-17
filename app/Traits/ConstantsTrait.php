<?php

namespace App\Traits;

trait ConstantsTrait
{
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
