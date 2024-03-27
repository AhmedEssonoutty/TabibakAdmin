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
        if (isset($attributes['files'])) {
            $model->attachments()->sync($attributes['files']);
        }
        if (isset($attributes['schedule_days'])) {
            foreach ($attributes['schedule_days'] as $day) {
                $day['doctor_id'] = $model->id;
                resolve(DoctorScheduleDayRepository::class)->create($day);
            }
        }
        if (isset($attributes['role'])) {
            $model->user->assignRole($attributes['role']);
        }
        return $model;
    }
}
