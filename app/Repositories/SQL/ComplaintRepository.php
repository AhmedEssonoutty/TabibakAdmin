<?php

namespace App\Repositories\SQL;

use App\Models\Complaint;
use App\Repositories\Contracts\ComplaintContract;

class ComplaintRepository extends BaseRepository implements ComplaintContract
{
    /**
     * ComplaintRepository constructor.
     * @param Complaint $model
     */
    public function __construct(Complaint $model)
    {
        parent::__construct($model);
    }
}
