<?php

namespace App\Repositories\SQL;

use App\Models\City;

class CityRepository extends BaseRepository implements \App\Repositories\Contracts\CityContract
{
    public function __construct(City $model)
    {
        parent::__construct($model);
    }
}
