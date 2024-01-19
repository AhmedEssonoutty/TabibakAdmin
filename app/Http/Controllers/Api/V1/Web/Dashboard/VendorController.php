<?php

namespace App\Http\Controllers\Api\V1\Dashboard\Web;

use App\Http\Controllers\Api\BaseApiController;
use App\Http\Requests\VendorRequest;
use App\Http\Resources\VendorResource;
use App\Models\Vendor;
use App\Repositories\Contracts\VendorContract;
use Exception;
use \Illuminate\Http\JsonResponse;

class VendorController extends BaseApiController
{
    /**
     * VendorController constructor.
     * @param VendorContract $repository
     */
    public function __construct(VendorContract $repository)
    {
        parent::__construct($repository, VendorResource::class, 'Vendor');
    }
    /**
     * Store a newly created resource in storage.
     * @param VendorRequest $request
     * @return JsonResponse
     */
    public function store(VendorRequest $request): JsonResponse
    {
        try {
            $vendor = $this->repository->create($request->validated());
            return $this->respondWithModel($vendor->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
   /**
    * Display the specified resource.
    * @param Vendor $vendor
    * @return JsonResponse
    */
   public function show(Vendor $vendor): JsonResponse
   {
       try {
           return $this->respondWithModel($vendor->load($this->relations));
       }catch (Exception $e) {
           return $this->respondWithError($e->getMessage());
       }
   }
    /**
     * Update the specified resource in storage.
     *
     * @param VendorRequest $request
     * @param Vendor $vendor
     * @return JsonResponse
     */
    public function update(VendorRequest $request, Vendor $vendor) : JsonResponse
    {
        try {
            $vendor = $this->repository->update($vendor, $request->validated());
            return $this->respondWithModel($vendor->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
    /**
     * Remove the specified resource from storage.
     * @param Vendor $vendor
     * @return JsonResponse
     */
    public function destroy(Vendor $vendor): JsonResponse
    {
        try {
            $this->repository->remove($vendor);
            return $this->respondWithSuccess(__('messages.deleted'));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }

    /**
     * active & inactive the specified resource from storage.
     * @param Vendor $vendor
     * @return JsonResponse
     */
    public function changeActivation(Vendor $vendor): JsonResponse
    {
        try {
            $this->repository->toggleField($vendor, 'is_active');
            return $this->respondWithModel($vendor->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
}
