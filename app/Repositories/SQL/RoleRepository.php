<?php

namespace App\Repositories\SQL;

use App\Models\Permission;
use App\Models\Role;
use App\Repositories\Contracts\RoleContract;
use Illuminate\Support\Arr;

class RoleRepository extends BaseRepository implements RoleContract
{
    /**
     * RoleRepository constructor.
     * @param Role $model
     */
    public function __construct(Role $model)
    {
        parent::__construct($model);
    }

    public function syncRelations($model, array $attributes): mixed
    {
        $model = $this->syncPermissions($model, $attributes);
        return $model->refresh();
    }

    public function syncPermissions($model, array $attributes = []): mixed
    {
        $requestPermissions = Arr::get($attributes, 'role_permissions', []);
        $requestPermissions = Permission::whereIn('id', $requestPermissions)->get();
        $model->syncPermissions($requestPermissions);
        return $model->refresh();
    }

}
