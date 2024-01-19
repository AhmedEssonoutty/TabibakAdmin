<?php

namespace App\Repositories\SQL;

use App\Models\Article;
use App\Repositories\Contracts\ArticleContract;

class ArticleRepository extends BaseRepository implements ArticleContract
{
    /**
     * ArticleRepository constructor.
     * @param Article $model
     */
    public function __construct(Article $model)
    {
        parent::__construct($model);
    }
}
