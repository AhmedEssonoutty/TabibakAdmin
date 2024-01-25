<?php

namespace App\Http\Controllers\Api\V1\Dashboard\Web;

use App\Http\Controllers\Api\V1\BaseApiController;
use App\Http\Requests\VendorTypeRequest;
use App\Http\Resources\VendorTypeResource;
use App\Models\VendorType;
use App\Repositories\Contracts\VendorTypeContract;
use Exception;
use \Illuminate\Http\JsonResponse;

class VendorTypeController extends BaseApiController
{
    /**
     * VendorTypeController constructor.
     * @param VendorTypeContract $repository
     */
    public function __construct(VendorTypeContract $repository)
    {
        parent::__construct($repository, VendorTypeResource::class, 'VendorType');
    }
    /**
     * Store a newly created resource in storage.
     * @param VendorTypeRequest $request
     * @return JsonResponse
     */
    public function store(VendorTypeRequest $request): JsonResponse
    {
        try {
            $vendorType = $this->repository->create($request->validated());
            return $this->respondWithModel($vendorType->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
   /**
    * Display the specified resource.
    * @param VendorType $vendorType
    * @return JsonResponse
    */
   public function show(VendorType $vendorType): JsonResponse
   {
       try {
           return $this->respondWithModel($vendorType->load($this->relations));
       }catch (Exception $e) {
           return $this->respondWithError($e->getMessage());
       }
   }
    /**
     * Update the specified resource in storage.
     *
     * @param VendorTypeRequest $request
     * @param VendorType $vendorType
     * @return JsonResponse
     */
    public function update(VendorTypeRequest $request, VendorType $vendorType) : JsonResponse
    {
        try {
            $vendorType = $this->repository->update($vendorType, $request->validated());
            return $this->respondWithModel($vendorType->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
    /**
     * Remove the specified resource from storage.
     * @param VendorType $vendorType
     * @return JsonResponse
     */
    public function destroy(VendorType $vendorType): JsonResponse
    {
        try {
            $this->repository->remove($vendorType);
            return $this->respondWithSuccess(__('messages.deleted'));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }

    /**
     * active & inactive the specified resource from storage.
     * @param VendorType $vendorType
     * @return JsonResponse
     */
    public function changeActivation(VendorType $vendorType): JsonResponse
    {
        try {
            $this->repository->toggleField($vendorType, 'is_active');
            return $this->respondWithModel($vendorType->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
}
