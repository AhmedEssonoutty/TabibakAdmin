<?php

namespace App\Models;

use App\Traits\ModelTrait;
use App\Traits\SearchTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class DoctorScheduleDayShift extends Model
{
    use SoftDeletes, ModelTrait, SearchTrait, SoftDeletes, HasTranslations;
    public const ADDITIONAL_PERMISSIONS = [];
    protected $fillable = ['doctor_schedule_day_id', 'parent_id', 'from_time', 'to_time', 'notes', 'is_active'];
    protected array $filters = ['keyword'];
    protected array $searchable = [];
    protected array $dates = ['from_time', 'to_time'];
    public array $filterModels = [];
    public array $filterCustom = [];
    public array $translatable = [];

    //---------------------relations-------------------------------------
    public function day(): BelongsTo
    {
        return $this->belongsTo(DoctorScheduleDay::class);
    }

    public function slots(): HasMany
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }
    //---------------------relations-------------------------------------

    //---------------------Scopes-------------------------------------

    //---------------------Scopes-------------------------------------

}
