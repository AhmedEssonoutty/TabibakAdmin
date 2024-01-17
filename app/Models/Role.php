<?php

namespace App\Models;

use App\Traits\ModelTrait;
use App\Traits\SearchTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends \Spatie\Permission\Models\Role
{
    use ModelTrait, SearchTrait, SoftDeletes;
    public const ADDITIONAL_PERMISSIONS = [];
    protected $fillable = ['id', 'name', 'name_ar', 'type', 'guard_name'];
    protected array $filters = ['keyword'];
    protected array $searchable = ['name'];
    public array $definedRelations = ['users'];
    public array $filterModels = ['Employee'];

}
