<?php

namespace App\Http\Controllers\Api\V1\Dashboard\Web;

use App\Http\Controllers\Api\V1\BaseApiController;
use App\Http\Requests\ArticleRequest;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use App\Repositories\Contracts\ArticleContract;
use Exception;
use \Illuminate\Http\JsonResponse;

class ArticleController extends BaseApiController
{
    /**
     * ArticleController constructor.
     * @param ArticleContract $repository
     */
    public function __construct(ArticleContract $repository)
    {
        parent::__construct($repository, ArticleResource::class, 'Article');
    }
    /**
     * Store a newly created resource in storage.
     * @param ArticleRequest $request
     * @return JsonResponse
     */
    public function store(ArticleRequest $request): JsonResponse
    {
        try {
            $article = $this->repository->create($request->validated());
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
            $article = $this->repository->update($article, $request->validated());
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
            $this->repository->remove($article);
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
            $this->repository->toggleField($article, 'is_active');
            return $this->respondWithModel($article->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
}
