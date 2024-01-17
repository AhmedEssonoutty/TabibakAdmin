<?php

namespace App\Repositories\Contracts;

use App\Models\ActivityLog;

interface ActivityLogContract extends BaseContract
{
    public function relatedData(ActivityLog $model);
}

