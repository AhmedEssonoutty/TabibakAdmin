<?php

namespace App\Repositories\SQL;

use App\Models\Doctor;
use App\Repositories\Contracts\DoctorContract;
use App\Repositories\Contracts\UserContract;

class DoctorRepository extends BaseRepository implements DoctorContract
{
    /**
     * DoctorRepository constructor.
     * @param Doctor $model
     */
    public function __construct(Doctor $model)
    {
        parent::__construct($model);
    }

    public function beforeCreate($attributes)
    {
        return resolve(UserContract::class)->prepareUserForRoleUsers($attributes);
    }

    public function beforeUpdate($attributes)
    {
        return resolve(UserContract::class)->prepareUserForRoleUsers($attributes);
    }

    public function syncRelations($model, $attributes)
    {
        if (isset($attributes['specialities'])) {
            $model->medicalSpecialities()->sync($attributes['specialities']);
        }
        return $model;
    }
}
