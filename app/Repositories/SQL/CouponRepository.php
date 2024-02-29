<?php

namespace App\Repositories\SQL;

use App\Models\Coupon;
use App\Repositories\Contracts\CouponContract;

class CouponRepository extends BaseRepository implements CouponContract
{
    /**
     * CouponRepository constructor.
     * @param Coupon $model
     */
    public function __construct(Coupon $model)
    {
        parent::__construct($model);
    }
}