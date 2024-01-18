<?php

namespace App\Http\Controllers\Api\V1\Dashboard\Web;

use App\Http\Controllers\Api\BaseApiController;
use App\Http\Requests\AcademicDegreeRequest;
use App\Http\Resources\AcademicDegreeResource;
use App\Models\AcademicDegree;
use App\Repositories\Contracts\AcademicDegreeContract;
use Exception;
use \Illuminate\Http\JsonResponse;

class AcademicDegreeController extends BaseApiController
{
    /**
     * AcademicDegreeController constructor.
     * @param AcademicDegreeContract $repository
     */
    public function __construct(AcademicDegreeContract $repository)
    {
        parent::__construct($repository, AcademicDegreeResource::class, 'AcademicDegree');
    }
    /**
     * Store a newly created resource in storage.
     * @param AcademicDegreeRequest $request
     * @return JsonResponse
     */
    public function store(AcademicDegreeRequest $request): JsonResponse
    {
        try {
            $academicDegree = $this->repository->create($request->validated());
            return $this->respondWithModel($academicDegree->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
   /**
    * Display the specified resource.
    * @param AcademicDegree $academicDegree
    * @return JsonResponse
    */
   public function show(AcademicDegree $academicDegree): JsonResponse
   {
       try {
           return $this->respondWithModel($academicDegree->load($this->relations));
       }catch (Exception $e) {
           return $this->respondWithError($e->getMessage());
       }
   }
    /**
     * Update the specified resource in storage.
     *
     * @param AcademicDegreeRequest $request
     * @param AcademicDegree $academicDegree
     * @return JsonResponse
     */
    public function update(AcademicDegreeRequest $request, AcademicDegree $academicDegree) : JsonResponse
    {
        try {
            $academicDegree = $this->repository->update($academicDegree, $request->validated());
            return $this->respondWithModel($academicDegree->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
    /**
     * Remove the specified resource from storage.
     * @param AcademicDegree $academicDegree
     * @return JsonResponse
     */
    public function destroy(AcademicDegree $academicDegree): JsonResponse
    {
        try {
            $this->repository->remove($academicDegree);
            return $this->respondWithSuccess(__('messages.deleted'));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }

    /**
     * active & inactive the specified resource from storage.
     * @param AcademicDegree $academicDegree
     * @return JsonResponse
     */
    public function changeActivation(AcademicDegree $academicDegree): JsonResponse
    {
        try {
            $this->repository->toggleField($academicDegree, 'is_active');
            return $this->respondWithModel($academicDegree->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
}
