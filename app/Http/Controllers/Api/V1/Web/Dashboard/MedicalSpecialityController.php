<?php

namespace App\Http\Controllers\Api\V1\Dashboard\Web;

use App\Http\Controllers\Api\V1\BaseApiController;
use App\Http\Requests\MedicalSpecialityRequest;
use App\Http\Resources\MedicalSpecialityResource;
use App\Models\MedicalSpeciality;
use App\Repositories\Contracts\MedicalSpecialityContract;
use Exception;
use \Illuminate\Http\JsonResponse;

class MedicalSpecialityController extends BaseApiController
{
    /**
     * MedicalSpecialityController constructor.
     * @param MedicalSpecialityContract $repository
     */
    public function __construct(MedicalSpecialityContract $repository)
    {
        parent::__construct($repository, MedicalSpecialityResource::class, 'MedicalSpeciality');
    }
    /**
     * Store a newly created resource in storage.
     * @param MedicalSpecialityRequest $request
     * @return JsonResponse
     */
    public function store(MedicalSpecialityRequest $request): JsonResponse
    {
        try {
            $medicalSpeciality = $this->repository->create($request->validated());
            return $this->respondWithModel($medicalSpeciality->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
   /**
    * Display the specified resource.
    * @param MedicalSpeciality $medicalSpeciality
    * @return JsonResponse
    */
   public function show(MedicalSpeciality $medicalSpeciality): JsonResponse
   {
       try {
           return $this->respondWithModel($medicalSpeciality->load($this->relations));
       }catch (Exception $e) {
           return $this->respondWithError($e->getMessage());
       }
   }
    /**
     * Update the specified resource in storage.
     *
     * @param MedicalSpecialityRequest $request
     * @param MedicalSpeciality $medicalSpeciality
     * @return JsonResponse
     */
    public function update(MedicalSpecialityRequest $request, MedicalSpeciality $medicalSpeciality) : JsonResponse
    {
        try {
            $medicalSpeciality = $this->repository->update($medicalSpeciality, $request->validated());
            return $this->respondWithModel($medicalSpeciality->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
    /**
     * Remove the specified resource from storage.
     * @param MedicalSpeciality $medicalSpeciality
     * @return JsonResponse
     */
    public function destroy(MedicalSpeciality $medicalSpeciality): JsonResponse
    {
        try {
            $this->repository->remove($medicalSpeciality);
            return $this->respondWithSuccess(__('messages.deleted'));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }

    /**
     * active & inactive the specified resource from storage.
     * @param MedicalSpeciality $medicalSpeciality
     * @return JsonResponse
     */
    public function changeActivation(MedicalSpeciality $medicalSpeciality): JsonResponse
    {
        try {
            $this->repository->toggleField($medicalSpeciality, 'is_active');
            return $this->respondWithModel($medicalSpeciality->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
}
