<?php

namespace App\Http\Controllers\Api\V1\Web;

use App\Http\Controllers\Api\V1\BaseApiController;
use App\Http\Requests\CityRequest;
use App\Http\Resources\CityResource;
use App\Models\City;
use App\Repositories\Contracts\CityContract;
use Exception;
use \Illuminate\Http\JsonResponse;

class CityController extends BaseApiController
{
    /**
     * CityController constructor.
     * @param CityContract $contract
     */
    public function __construct(CityContract $contract)
    {
        parent::__construct($contract, CityResource::class, 'City');
    }
    /**
     * Store a newly created resource in storage.
     * @param CityRequest $request
     * @return JsonResponse
     */
    public function store(CityRequest $request): JsonResponse
    {
        try {
            $city = $this->contract->create($request->validated());
            return $this->respondWithModel($city->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
   /**
    * Display the specified resource.
    * @param City $city
    * @return JsonResponse
    */
   public function show(City $city): JsonResponse
   {
       try {
           return $this->respondWithModel($city->load($this->relations));
       }catch (Exception $e) {
           return $this->respondWithError($e->getMessage());
       }
   }
    /**
     * Update the specified resource in storage.
     *
     * @param CityRequest $request
     * @param City $city
     * @return JsonResponse
     */
    public function update(CityRequest $request, City $city) : JsonResponse
    {
        try {
            $city = $this->contract->update($city, $request->validated());
            return $this->respondWithModel($city->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
    /**
     * Remove the specified resource from storage.
     * @param City $city
     * @return JsonResponse
     */
    public function destroy(City $city): JsonResponse
    {
        try {
            $this->contract->remove($city);
            return $this->respondWithSuccess(__('messages.deleted'));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }

    /**
     * active & inactive the specified resource from storage.
     * @param City $city
     * @return JsonResponse
     */
    public function changeActivation(City $city): JsonResponse
    {
        try {
            $this->contract->toggleField($city, 'is_active');
            return $this->respondWithModel($city->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
}
