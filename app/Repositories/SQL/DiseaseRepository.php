<?php

namespace App\Repositories\SQL;

use App\Models\Disease;
use App\Repositories\Contracts\DiseaseContract;

class DiseaseRepository extends BaseRepository implements DiseaseContract
{
    /**
     * DiseaseRepository constructor.
     * @param Disease $model
     */
    public function __construct(Disease $model)
    {
        parent::__construct($model);
    }
}
