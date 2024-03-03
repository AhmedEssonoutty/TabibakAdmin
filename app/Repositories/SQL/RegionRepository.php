<?php

namespace App\Repositories\SQL;

use App\Models\Region;
use App\Repositories\Contracts\RegionContract;

class RegionRepository extends BaseRepository implements RegionContract
{
    /**
     * RegionRepository constructor.
     * @param Region $model
     */
    public function __construct(Region $model)
    {
        parent::__construct($model);
    }
}
