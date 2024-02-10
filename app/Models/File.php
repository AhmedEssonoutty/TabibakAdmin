<?php

namespace App\Models;

use App\Constants\FileConstants;
use App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use ModelTrait;

    public $timestamps = true;
    protected array $dates = ['deleted_at'];
    protected $casts = [
        'type' => FileConstants::class
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    // Relations
    public function fileable(): MorphTo
    {
        return $this->morphTo();
    }
}
