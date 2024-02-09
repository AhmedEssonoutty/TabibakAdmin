<?php

namespace App\Repositories\Contracts;

interface LikeContract extends BaseContract
{
    public function toggleRecord($model): bool;
}

