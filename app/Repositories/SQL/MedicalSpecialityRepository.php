<?php

namespace App\Repositories\SQL;

use App\Models\MedicalSpeciality;
use App\Repositories\Contracts\MedicalSpecialityContract;

class MedicalSpecialityRepository extends BaseRepository implements MedicalSpecialityContract
{
    /**
     * MedicalSpecialityRepository constructor.
     * @param MedicalSpeciality $model
     */
    public function __construct(MedicalSpeciality $model)
    {
        parent::__construct($model);
    }
}
