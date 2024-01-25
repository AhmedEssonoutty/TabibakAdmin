<?php

namespace App\Models;

use App\Traits\ModelTrait;
use App\Traits\SearchTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Article extends Model
{
    use SoftDeletes, ModelTrait, SearchTrait, SoftDeletes, HasTranslations;
    public const ADDITIONAL_PERMISSIONS = [];
    protected $fillable = ['author_id','title', 'content', 'publish_date',
        'publisher_id', 'views', 'likes', 'dislikes', 'reports', 'is_active'];
    protected array $filters = ['keyword'];
    protected array $searchable = ['title', 'content'];
    protected array $dates = ['publish_date'];
    public array $filterModels = [];
    public array $filterCustom = [];
    public array $translatable = ['title', 'content'];

    //---------------------relations-------------------------------------
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }
    public function publisher(): BelongsTo
    {
        return $this->belongsTo(User::class, 'publisher_id');
    }
    //---------------------relations-------------------------------------

    //---------------------Scopes-------------------------------------

    //---------------------Scopes-------------------------------------

}
