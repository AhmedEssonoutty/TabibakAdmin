<?php

namespace App\Repositories\SQL;

use App\Models\User;
use App\Repositories\Contracts\UserContract;

class UserRepository extends BaseRepository implements UserContract
{
    /**
     * UserRepository constructor.
     * @param User $model
     */
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function syncRelations($model, $attributes)
    {
        if (isset($attributes['role_id'])) {
            $model->syncRoles($attributes['role_id']);
        }
        return $model;
    }

    public function prepareUserForRoleUsers($attributes): array
    {
        if (isset($attributes['user'])) {
            if (isset($attributes['user']['id'])) {
                $user = resolve(UserContract::class)->find($attributes['user']['id']);
                unset($attributes['user']['id']);
                $user->update($attributes['user']);
            } else {
                $user = resolve(UserContract::class)->create($attributes['user']);
            }
            unset($attributes['user']);
            $attributes['user_id'] = $user->id;
        }
        return $attributes;
    }
}
