<?php

namespace App\Repositories\SQL;

use App\Models\Rate;
use App\Repositories\Contracts\RateContract;

class RateRepository extends BaseRepository implements RateContract
{
    /**
     * RateRepository constructor.
     * @param Rate $model
     */
    public function __construct(Rate $model)
    {
        parent::__construct($model);
    }
}
