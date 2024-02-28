<?php

namespace App\Repositories\SQL;

use App\Models\DoctorScheduleDayShift;
use App\Repositories\Contracts\DoctorScheduleDayShiftContract;

class DoctorScheduleDayShiftRepository extends BaseRepository implements DoctorScheduleDayShiftContract
{
    /**
     * DoctorScheduleDayShiftRepository constructor.
     * @param DoctorScheduleDayShift $model
     */
    public function __construct(DoctorScheduleDayShift $model)
    {
        parent::__construct($model);
    }
}
