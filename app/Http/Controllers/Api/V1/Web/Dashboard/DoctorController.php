<?php

namespace App\Http\Controllers\Api\V1\Dashboard\Web;

use App\Http\Controllers\Api\BaseApiController;
use App\Http\Requests\DoctorRequest;
use App\Http\Resources\DoctorResource;
use App\Models\Doctor;
use App\Repositories\Contracts\DoctorContract;
use Exception;
use \Illuminate\Http\JsonResponse;

class DoctorController extends BaseApiController
{
    /**
     * DoctorController constructor.
     * @param DoctorContract $repository
     */
    public function __construct(DoctorContract $repository)
    {
        parent::__construct($repository, DoctorResource::class, 'Doctor');
    }
    /**
     * Store a newly created resource in storage.
     * @param DoctorRequest $request
     * @return JsonResponse
     */
    public function store(DoctorRequest $request): JsonResponse
    {
        try {
            $doctor = $this->repository->create($request->validated());
            return $this->respondWithModel($doctor->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
   /**
    * Display the specified resource.
    * @param Doctor $doctor
    * @return JsonResponse
    */
   public function show(Doctor $doctor): JsonResponse
   {
       try {
           return $this->respondWithModel($doctor->load($this->relations));
       }catch (Exception $e) {
           return $this->respondWithError($e->getMessage());
       }
   }
    /**
     * Update the specified resource in storage.
     *
     * @param DoctorRequest $request
     * @param Doctor $doctor
     * @return JsonResponse
     */
    public function update(DoctorRequest $request, Doctor $doctor) : JsonResponse
    {
        try {
            $doctor = $this->repository->update($doctor, $request->validated());
            return $this->respondWithModel($doctor->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
    /**
     * Remove the specified resource from storage.
     * @param Doctor $doctor
     * @return JsonResponse
     */
    public function destroy(Doctor $doctor): JsonResponse
    {
        try {
            $this->repository->remove($doctor);
            return $this->respondWithSuccess(__('messages.deleted'));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }

    /**
     * active & inactive the specified resource from storage.
     * @param Doctor $doctor
     * @return JsonResponse
     */
    public function changeActivation(Doctor $doctor): JsonResponse
    {
        try {
            $this->repository->toggleField($doctor, 'is_active');
            return $this->respondWithModel($doctor->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
}
