<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $casts = [
        'map_location' => 'array',
        'facilities' => 'array',
        'settings' => 'array',
    ];
}
