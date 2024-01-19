<?php

namespace App\Http\Controllers\Api\V1\Dashboard\Web;

use App\Http\Controllers\Api\BaseApiController;
use App\Http\Requests\PatientRequest;
use App\Http\Resources\PatientResource;
use App\Models\Patient;
use App\Repositories\Contracts\PatientContract;
use Exception;
use \Illuminate\Http\JsonResponse;

class PatientController extends BaseApiController
{
    /**
     * PatientController constructor.
     * @param PatientContract $repository
     */
    public function __construct(PatientContract $repository)
    {
        parent::__construct($repository, PatientResource::class, 'Patient');
    }
    /**
     * Store a newly created resource in storage.
     * @param PatientRequest $request
     * @return JsonResponse
     */
    public function store(PatientRequest $request): JsonResponse
    {
        try {
            $patient = $this->repository->create($request->validated());
            return $this->respondWithModel($patient->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
   /**
    * Display the specified resource.
    * @param Patient $patient
    * @return JsonResponse
    */
   public function show(Patient $patient): JsonResponse
   {
       try {
           return $this->respondWithModel($patient->load($this->relations));
       }catch (Exception $e) {
           return $this->respondWithError($e->getMessage());
       }
   }
    /**
     * Update the specified resource in storage.
     *
     * @param PatientRequest $request
     * @param Patient $patient
     * @return JsonResponse
     */
    public function update(PatientRequest $request, Patient $patient) : JsonResponse
    {
        try {
            $patient = $this->repository->update($patient, $request->validated());
            return $this->respondWithModel($patient->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
    /**
     * Remove the specified resource from storage.
     * @param Patient $patient
     * @return JsonResponse
     */
    public function destroy(Patient $patient): JsonResponse
    {
        try {
            $this->repository->remove($patient);
            return $this->respondWithSuccess(__('messages.deleted'));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }

    /**
     * active & inactive the specified resource from storage.
     * @param Patient $patient
     * @return JsonResponse
     */
    public function changeActivation(Patient $patient): JsonResponse
    {
        try {
            $this->repository->toggleField($patient, 'is_active');
            return $this->respondWithModel($patient->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
}
