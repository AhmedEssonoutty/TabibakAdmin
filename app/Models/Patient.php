<?php

namespace App\Models;

use App\Traits\ModelTrait;
use App\Traits\SearchTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Patient extends Model
{
    use SoftDeletes, ModelTrait, SearchTrait, SoftDeletes, HasTranslations;
    public const ADDITIONAL_PERMISSIONS = [];
    protected $fillable = ['user_id', 'date_of_birth', 'national_id', 'is_active'];
    protected array $filters = ['keyword'];
    protected array $searchable = ['user.name'];
    protected array $dates = ['date_of_birth'];
    public array $filterModels = [];
    public array $filterCustom = [];
    public array $translatable = [];
    protected $with = ['user'];

    //---------------------relations-------------------------------------
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    //---------------------relations-------------------------------------

    //---------------------Scopes-------------------------------------

    //---------------------Scopes-------------------------------------

}
