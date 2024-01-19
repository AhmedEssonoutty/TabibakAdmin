<?php

namespace App\Repositories\SQL;

use App\Models\Vendor;
use App\Repositories\Contracts\VendorContract;

class VendorRepository extends BaseRepository implements VendorContract
{
    /**
     * VendorRepository constructor.
     * @param Vendor $model
     */
    public function __construct(Vendor $model)
    {
        parent::__construct($model);
    }
}
