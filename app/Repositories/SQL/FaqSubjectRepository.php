<?php

namespace App\Repositories\SQL;

use App\Models\FaqSubject;
use App\Repositories\Contracts\FaqSubjectContract;

class FaqSubjectRepository extends BaseRepository implements FaqSubjectContract
{
    /**
     * FaqSubjectRepository constructor.
     * @param FaqSubject $model
     */
    public function __construct(FaqSubject $model)
    {
        parent::__construct($model);
    }
}
