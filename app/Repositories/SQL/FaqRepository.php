<?php

namespace App\Repositories\SQL;

use App\Models\Faq;
use App\Repositories\Contracts\FaqContract;

class FaqRepository extends BaseRepository implements FaqContract
{
    /**
     * FaqRepository constructor.
     * @param Faq $model
     */
    public function __construct(Faq $model)
    {
        parent::__construct($model);
    }
}
