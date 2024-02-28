<?php

namespace App\Repositories\SQL;

use App\Models\DoctorScheduleDay;
use App\Repositories\Contracts\DoctorScheduleDayContract;

class DoctorScheduleDayRepository extends BaseRepository implements DoctorScheduleDayContract
{
    /**
     * DoctorScheduleDayRepository constructor.
     * @param DoctorScheduleDay $model
     */
    public function __construct(DoctorScheduleDay $model)
    {
        parent::__construct($model);
    }
}
