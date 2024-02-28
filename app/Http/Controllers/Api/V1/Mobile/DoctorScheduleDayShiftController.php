<?php

namespace App\Http\Controllers\Api\V1\Mobile;

use App\Http\Controllers\Api\V1\BaseApiController;
use App\Http\Requests\DoctorScheduleDayShiftRequest;
use App\Http\Resources\DoctorScheduleDayShiftResource;
use App\Models\DoctorScheduleDayShift;
use App\Repositories\Contracts\DoctorScheduleDayShiftContract;
use Exception;
use Illuminate\Http\JsonResponse;

class DoctorScheduleDayShiftController extends BaseApiController
{
    /**
     * DoctorScheduleDayShiftController constructor.
     * @param DoctorScheduleDayShiftContract $contract
     */
    public function __construct(DoctorScheduleDayShiftContract $contract)
    {
        parent::__construct($contract, DoctorScheduleDayShiftResource::class, 'DoctorScheduleDayShift');
    }
    /**
     * Store a newly created resource in storage.
     * @param DoctorScheduleDayShiftRequest $request
     * @return JsonResponse
     */
    public function store(DoctorScheduleDayShiftRequest $request): JsonResponse
    {
        try {
            $doctorScheduleDayShift = $this->contract->create($request->validated());
            return $this->respondWithModel($doctorScheduleDayShift->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
   /**
    * Display the specified resource.
    * @param DoctorScheduleDayShift $doctorScheduleDayShift
    * @return JsonResponse
    */
   public function show(DoctorScheduleDayShift $doctorScheduleDayShift): JsonResponse
   {
       try {
           return $this->respondWithModel($doctorScheduleDayShift->load($this->relations));
       }catch (Exception $e) {
           return $this->respondWithError($e->getMessage());
       }
   }
    /**
     * Update the specified resource in storage.
     *
     * @param DoctorScheduleDayShiftRequest $request
     * @param DoctorScheduleDayShift $doctorScheduleDayShift
     * @return JsonResponse
     */
    public function update(DoctorScheduleDayShiftRequest $request, DoctorScheduleDayShift $doctorScheduleDayShift) : JsonResponse
    {
        try {
            $doctorScheduleDayShift = $this->contract->update($doctorScheduleDayShift, $request->validated());
            return $this->respondWithModel($doctorScheduleDayShift->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
    /**
     * Remove the specified resource from storage.
     * @param DoctorScheduleDayShift $doctorScheduleDayShift
     * @return JsonResponse
     */
    public function destroy(DoctorScheduleDayShift $doctorScheduleDayShift): JsonResponse
    {
        try {
            $this->contract->remove($doctorScheduleDayShift);
            return $this->respondWithSuccess(__('messages.deleted'));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }

    /**
     * active & inactive the specified resource from storage.
     * @param DoctorScheduleDayShift $doctorScheduleDayShift
     * @return JsonResponse
     */
    public function changeActivation(DoctorScheduleDayShift $doctorScheduleDayShift): JsonResponse
    {
        try {
            $this->contract->toggleField($doctorScheduleDayShift, 'is_active');
            return $this->respondWithModel($doctorScheduleDayShift->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
}
