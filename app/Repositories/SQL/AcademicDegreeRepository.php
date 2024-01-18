<?php

namespace App\Repositories\SQL;

use App\Models\AcademicDegree;
use App\Repositories\Contracts\AcademicDegreeContract;

class AcademicDegreeRepository extends BaseRepository implements AcademicDegreeContract
{
    /**
     * AcademicDegreeRepository constructor.
     * @param AcademicDegree $model
     */
    public function __construct(AcademicDegree $model)
    {
        parent::__construct($model);
    }
}
