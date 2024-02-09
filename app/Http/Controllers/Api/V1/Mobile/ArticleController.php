<?php

namespace App\Http\Controllers\Api\V1\Mobile;

use App\Http\Controllers\Api\V1\BaseApiController;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use App\Repositories\Contracts\ArticleContract;
use App\Repositories\Contracts\LikeContract;

class ArticleController extends BaseApiController
{
    private LikeContract $likeContract;
    public function __construct(ArticleContract $contract, LikeContract $likeContract)
    {
        parent::__construct($contract, ArticleResource::class);
        $this->likeContract = $likeContract;
        $this->relations = ['mainImage', 'author', 'likes'];
    }

    public function show(Article $article)
    {
        $this->contract->increment($article, 'views');
        return $this->respondWithModel($article);
    }

    public function toggleLike(Article $article)
    {
        $this->likeContract->toggleRecord($article);
        return $this->respondWithModel($article);
    }

}
