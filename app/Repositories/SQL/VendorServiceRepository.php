<?php

namespace App\Repositories\SQL;

use App\Models\VendorService;
use App\Repositories\Contracts\VendorServiceContract;

class VendorServiceRepository extends BaseRepository implements VendorServiceContract
{
    /**
     * VendorServiceRepository constructor.
     * @param VendorService $model
     */
    public function __construct(VendorService $model)
    {
        parent::__construct($model);
    }
}
