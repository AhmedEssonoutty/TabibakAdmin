<?php

namespace App\Http\Controllers\Api\V1\Web;

use App\Http\Controllers\Api\V1\BaseApiController;
use App\Http\Requests\RegionRequest;
use App\Http\Resources\RegionResource;
use App\Models\Region;
use App\Repositories\Contracts\RegionContract;
use Exception;
use \Illuminate\Http\JsonResponse;

class RegionController extends BaseApiController
{
    /**
     * RegionController constructor.
     * @param RegionContract $contract
     */
    public function __construct(RegionContract $contract)
    {
        parent::__construct($contract, RegionResource::class, 'Region');
    }
    /**
     * Store a newly created resource in storage.
     * @param RegionRequest $request
     * @return JsonResponse
     */
    public function store(RegionRequest $request): JsonResponse
    {
        try {
            $region = $this->contract->create($request->validated());
            return $this->respondWithModel($region->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
   /**
    * Display the specified resource.
    * @param Region $region
    * @return JsonResponse
    */
   public function show(Region $region): JsonResponse
   {
       try {
           return $this->respondWithModel($region->load($this->relations));
       }catch (Exception $e) {
           return $this->respondWithError($e->getMessage());
       }
   }
    /**
     * Update the specified resource in storage.
     *
     * @param RegionRequest $request
     * @param Region $region
     * @return JsonResponse
     */
    public function update(RegionRequest $request, Region $region) : JsonResponse
    {
        try {
            $region = $this->contract->update($region, $request->validated());
            return $this->respondWithModel($region->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
    /**
     * Remove the specified resource from storage.
     * @param Region $region
     * @return JsonResponse
     */
    public function destroy(Region $region): JsonResponse
    {
        try {
            $this->contract->remove($region);
            return $this->respondWithSuccess(__('messages.deleted'));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }

    /**
     * active & inactive the specified resource from storage.
     * @param Region $region
     * @return JsonResponse
     */
    public function changeActivation(Region $region): JsonResponse
    {
        try {
            $this->contract->toggleField($region, 'is_active');
            return $this->respondWithModel($region->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
}
