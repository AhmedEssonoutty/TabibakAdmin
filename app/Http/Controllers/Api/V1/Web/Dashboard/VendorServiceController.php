<?php

namespace App\Http\Controllers\Api\V1\Dashboard\Web;

use App\Http\Controllers\Api\V1\BaseApiController;
use App\Http\Requests\VendorServiceRequest;
use App\Http\Resources\VendorServiceResource;
use App\Models\VendorService;
use App\Repositories\Contracts\VendorServiceContract;
use Exception;
use \Illuminate\Http\JsonResponse;

class VendorServiceController extends BaseApiController
{
    /**
     * VendorServiceController constructor.
     * @param VendorServiceContract $repository
     */
    public function __construct(VendorServiceContract $repository)
    {
        parent::__construct($repository, VendorServiceResource::class, 'VendorService');
    }
    /**
     * Store a newly created resource in storage.
     * @param VendorServiceRequest $request
     * @return JsonResponse
     */
    public function store(VendorServiceRequest $request): JsonResponse
    {
        try {
            $vendorService = $this->repository->create($request->validated());
            return $this->respondWithModel($vendorService->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
   /**
    * Display the specified resource.
    * @param VendorService $vendorService
    * @return JsonResponse
    */
   public function show(VendorService $vendorService): JsonResponse
   {
       try {
           return $this->respondWithModel($vendorService->load($this->relations));
       }catch (Exception $e) {
           return $this->respondWithError($e->getMessage());
       }
   }
    /**
     * Update the specified resource in storage.
     *
     * @param VendorServiceRequest $request
     * @param VendorService $vendorService
     * @return JsonResponse
     */
    public function update(VendorServiceRequest $request, VendorService $vendorService) : JsonResponse
    {
        try {
            $vendorService = $this->repository->update($vendorService, $request->validated());
            return $this->respondWithModel($vendorService->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
    /**
     * Remove the specified resource from storage.
     * @param VendorService $vendorService
     * @return JsonResponse
     */
    public function destroy(VendorService $vendorService): JsonResponse
    {
        try {
            $this->repository->remove($vendorService);
            return $this->respondWithSuccess(__('messages.deleted'));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }

    /**
     * active & inactive the specified resource from storage.
     * @param VendorService $vendorService
     * @return JsonResponse
     */
    public function changeActivation(VendorService $vendorService): JsonResponse
    {
        try {
            $this->repository->toggleField($vendorService, 'is_active');
            return $this->respondWithModel($vendorService->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
}
