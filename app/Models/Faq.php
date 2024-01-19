<?php

namespace App\Models;

use App\Traits\ModelTrait;
use App\Traits\SearchTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Faq extends Model
{
    use SoftDeletes, ModelTrait, SearchTrait, SoftDeletes, HasTranslations;
    public const ADDITIONAL_PERMISSIONS = [];
    protected $fillable = ['question', 'answer', 'is_active'];
    protected array $filters = ['keyword'];
    protected array $searchable = [];
    protected array $dates = [];
    public array $filterModels = [];
    public array $filterCustom = [];
    public array $translatable = ['question', 'answer'];

    //---------------------relations-------------------------------------

    //---------------------relations-------------------------------------

    //---------------------Scopes-------------------------------------

    //---------------------Scopes-------------------------------------

}
