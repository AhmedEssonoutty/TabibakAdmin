<?php

namespace App\Http\Controllers\Api\V1\Mobile;

use App\Http\Controllers\Api\V1\BaseApiController;
use App\Http\Requests\ArticleRequest;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use App\Repositories\Contracts\ArticleContract;
use App\Repositories\Contracts\LikeContract;
use Exception;
use \Illuminate\Http\JsonResponse;

class ArticleController extends BaseApiController
{
    private LikeContract $likeContract;

    /**
     * ArticleController constructor.
     * @param ArticleContract $contract
     * @param LikeContract $likeContract
     */
    public function __construct(ArticleContract $contract, LikeContract $likeContract)
    {
        parent::__construct($contract, ArticleResource::class, 'Article');
        $this->likeContract = $likeContract;
        $this->relations = ['mainImage', 'author', 'likes'];
    }
    
    /**
     * Store a newly created resource in storage.
     * @param ArticleRequest $request
     * @return JsonResponse
     */
    public function store(ArticleRequest $request): JsonResponse
    {
        try {
            $article = $this->contract->create($request->validated());
            return $this->respondWithModel($article->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
    
    /**
     * Display the specified resource.
     * @param Article $article
     * @return JsonResponse
     */
    public function show(Article $article): JsonResponse
    {
        try {
            $this->contract->increment($article, 'views');
            return $this->respondWithModel($article->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param ArticleRequest $request
     * @param Article $article
     * @return JsonResponse
     */
    public function update(ArticleRequest $request, Article $article) : JsonResponse
    {
        try {
            $article = $this->contract->update($article, $request->validated());
            return $this->respondWithModel($article->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
    
    /**
     * Remove the specified resource from storage.
     * @param Article $article
     * @return JsonResponse
     */
    public function destroy(Article $article): JsonResponse
    {
        try {
            $this->contract->remove($article);
            return $this->respondWithSuccess(__('messages.deleted'));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }

    /**
     * active & inactive the specified resource from storage.
     * @param Article $article
     * @return JsonResponse
     */
    public function changeActivation(Article $article): JsonResponse
    {
        try {
            $this->contract->toggleField($article, 'is_active');
            return $this->respondWithModel($article->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }

    /**
     * @param Article $article
     * @return JsonResponse
     */
    public function toggleLike(Article $article): JsonResponse
    {
        $this->likeContract->toggleRecord($article);
        return $this->respondWithModel($article);
    }
}
