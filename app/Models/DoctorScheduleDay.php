<?php

namespace App\Models;

use App\Traits\ModelTrait;
use App\Traits\SearchTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class DoctorScheduleDay extends Model
{
    use SoftDeletes, ModelTrait, SearchTrait, SoftDeletes, HasTranslations;
    public const ADDITIONAL_PERMISSIONS = [];
    protected $fillable = ['doctor_id', 'date', 'is_active'];
    protected array $filters = ['keyword'];
    protected array $searchable = [];
    protected array $dates = ['date'];
    public array $filterModels = [];
    public array $filterCustom = [];
    public array $translatable = [];

    //---------------------relations-------------------------------------
    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }

    public function shifts(): HasMany
    {
        return $this->hasMany(DoctorScheduleDayShift::class)->whereNull('parent_id');
    }

    public function slots(): HasMany
    {
        return $this->hasMany(DoctorScheduleDayShift::class)->whereNotNull('parent_id');
    }
    //---------------------relations-------------------------------------

    //---------------------Scopes-------------------------------------

    //---------------------Scopes-------------------------------------

}
