<?php

namespace App\Repositories\SQL;

use App\Models\Consultation;
use App\Repositories\Contracts\ConsultationContract;

class ConsultationRepository extends BaseRepository implements ConsultationContract
{
    /**
     * ConsultationRepository constructor.
     * @param Consultation $model
     */
    public function __construct(Consultation $model)
    {
        parent::__construct($model);
    }

    public function syncRelations($model, $relations): void
    {
        if (!empty($relations['diseases']))
            $model->diseases()->sync($relations['diseases']);
        if (!empty($relations['files']))
            $model->files()->sync($relations['files']);
    }
}
