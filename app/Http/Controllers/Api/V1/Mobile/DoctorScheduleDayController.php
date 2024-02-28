<?php

namespace App\Http\Controllers\Api\V1\Mobile;

use App\Http\Controllers\Api\V1\BaseApiController;
use App\Http\Requests\DoctorScheduleDayRequest;
use App\Http\Resources\DoctorScheduleDayResource;
use App\Models\DoctorScheduleDay;
use App\Repositories\Contracts\DoctorScheduleDayContract;
use Exception;
use Illuminate\Http\JsonResponse;

class DoctorScheduleDayController extends BaseApiController
{
    /**
     * DoctorScheduleDayController constructor.
     * @param DoctorScheduleDayContract $contract
     */
    public function __construct(DoctorScheduleDayContract $contract)
    {
        parent::__construct($contract, DoctorScheduleDayResource::class, 'DoctorScheduleDay');
    }
    /**
     * Store a newly created resource in storage.
     * @param DoctorScheduleDayRequest $request
     * @return JsonResponse
     */
    public function store(DoctorScheduleDayRequest $request): JsonResponse
    {
        try {
            $doctorScheduleDay = $this->contract->create($request->validated());
            return $this->respondWithModel($doctorScheduleDay->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
   /**
    * Display the specified resource.
    * @param DoctorScheduleDay $doctorScheduleDay
    * @return JsonResponse
    */
   public function show(DoctorScheduleDay $doctorScheduleDay): JsonResponse
   {
       try {
           return $this->respondWithModel($doctorScheduleDay->load($this->relations));
       }catch (Exception $e) {
           return $this->respondWithError($e->getMessage());
       }
   }
    /**
     * Update the specified resource in storage.
     *
     * @param DoctorScheduleDayRequest $request
     * @param DoctorScheduleDay $doctorScheduleDay
     * @return JsonResponse
     */
    public function update(DoctorScheduleDayRequest $request, DoctorScheduleDay $doctorScheduleDay) : JsonResponse
    {
        try {
            $doctorScheduleDay = $this->contract->update($doctorScheduleDay, $request->validated());
            return $this->respondWithModel($doctorScheduleDay->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
    /**
     * Remove the specified resource from storage.
     * @param DoctorScheduleDay $doctorScheduleDay
     * @return JsonResponse
     */
    public function destroy(DoctorScheduleDay $doctorScheduleDay): JsonResponse
    {
        try {
            $this->contract->remove($doctorScheduleDay);
            return $this->respondWithSuccess(__('messages.deleted'));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }

    /**
     * active & inactive the specified resource from storage.
     * @param DoctorScheduleDay $doctorScheduleDay
     * @return JsonResponse
     */
    public function changeActivation(DoctorScheduleDay $doctorScheduleDay): JsonResponse
    {
        try {
            $this->contract->toggleField($doctorScheduleDay, 'is_active');
            return $this->respondWithModel($doctorScheduleDay->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
}
