<?php

namespace App\Repositories\SQL;

use App\Models\Like;
use App\Repositories\Contracts\LikeContract;

class LikeRepository extends BaseRepository implements LikeContract
{
    /**
     * ArticleRepository constructor.
     * @param Like $model
     */
    public function __construct(Like $model)
    {
        parent::__construct($model);
    }

    public function toggleRecord($model): bool
    {
        $type = $model->getModelName();
        $id = $model->id;
        $like = $this->findByFields(['and' => ['likeable_id' => $id, 'likeable_type' => $type,
            'user_id' => auth()->id()]]);
        if ($like) {
            $like->delete();
            return false;
        }
        $this->create(['likeable_id' => $id, 'likeable_type' => $type, 'user_id' => auth()->id()]);
        return true;
    }
}
