<?php

namespace App\Repositories\SQL;

use App\Models\City;
use App\Repositories\Contracts\CityContract;

class CityRepository extends BaseRepository implements CityContract
{
    /**
     * CityRepository constructor.
     * @param City $model
     */
    public function __construct(City $model)
    {
        parent::__construct($model);
    }
}
