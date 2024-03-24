<?php

namespace App\Models;

use App\Traits\ModelTrait;
use App\Traits\SearchTrait;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends \Spatie\Permission\Models\Role
{
    use ModelTrait, SearchTrait, SoftDeletes;
    public const ADDITIONAL_PERMISSIONS = [];
    protected $fillable = ['id', 'name', 'name_ar', 'type', 'guard_name', 'is_active'];
    protected array $filters = ['keyword', 'active'];
    protected array $searchable = ['name'];
    public array $definedRelations = ['users'];
    public array $filterModels = ['Employee'];

    //---------------------relations-------------------------------------
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'model_has_roles', 'role_id', 'model_id');
    }
    //---------------------relations-------------------------------------

}
