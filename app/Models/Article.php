<?php

namespace App\Models;

use App\Constants\FileConstants;
use App\Traits\ModelTrait;
use App\Traits\SearchTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
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

    public function mainImage(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')
            ->where('type', FileConstants::FILE_TYPE_ARTICLE_MAIN_IMAGE);
    }

    public function likes(): MorphMany
    {
        return $this->morphMany(Like::class, 'likeable');
    }
    //---------------------relations-------------------------------------

    //---------------------Scopes-------------------------------------

    //---------------------Scopes-------------------------------------

    //---------------------Attributes-------------------------------------
    public function authLikeStatus(): Attribute
    {
        return Attribute::get(function () {
            return $this->likes->contains('user_id', auth()->id());
        });
    }
    //---------------------Attributes-------------------------------------

}
