<?php

namespace App\Repositories\SQL;

use App\Models\Doctor;
use App\Repositories\Contracts\DoctorContract;

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
}
