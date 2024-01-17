<?php

namespace App\Repositories\SQL;

use App\Models\Permission;
use App\Repositories\Contracts\PermissionContract;

class PermissionRepository extends BaseRepository implements PermissionContract
{
    /**
     * PermissionRepository constructor.
     * @param Permission $model
     */
    public function __construct(Permission $model)
    {
        parent::__construct($model);
    }
}
