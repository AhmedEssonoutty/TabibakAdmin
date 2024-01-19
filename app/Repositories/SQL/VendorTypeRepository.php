<?php

namespace App\Repositories\SQL;

use App\Models\VendorType;
use App\Repositories\Contracts\VendorTypeContract;

class VendorTypeRepository extends BaseRepository implements VendorTypeContract
{
    /**
     * VendorTypeRepository constructor.
     * @param VendorType $model
     */
    public function __construct(VendorType $model)
    {
        parent::__construct($model);
    }
}
