<?php

namespace App\Http\Controllers\Api\V1\Mobile;

use App\Http\Controllers\Api\V1\BaseApiController;
use App\Http\Requests\ConsultationRequest;
use App\Http\Resources\ConsultationResource;
use App\Models\Consultation;
use App\Repositories\Contracts\ConsultationContract;
use Exception;
use Illuminate\Http\JsonResponse;

class ConsultationController extends BaseApiController
{
    /**
     * ConsultationController constructor.
     * @param ConsultationContract $contract
     */
    public function __construct(ConsultationContract $contract)
    {
        $this->defaultScopes = ['mineAsPatient' => true];
        parent::__construct($contract, ConsultationResource::class);
    }
    /**
     * Store a newly created resource in storage.
     * @param ConsultationRequest $request
     * @return JsonResponse
     */
    public function store(ConsultationRequest $request): JsonResponse
    {
        try {
            $consultation = $this->contract->create($request->validated());
            return $this->respondWithModel($consultation->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
   /**
    * Display the specified resource.
    * @param Consultation $consultation
    * @return JsonResponse
    */
   public function show(Consultation $consultation): JsonResponse
   {
       try {
           return $this->respondWithModel($consultation->load($this->relations));
       }catch (Exception $e) {
           return $this->respondWithError($e->getMessage());
       }
   }
    /**
     * Update the specified resource in storage.
     *
     * @param ConsultationRequest $request
     * @param Consultation $consultation
     * @return JsonResponse
     */
    public function update(ConsultationRequest $request, Consultation $consultation) : JsonResponse
    {
        try {
            $consultation = $this->contract->update($consultation, $request->validated());
            return $this->respondWithModel($consultation->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
    /**
     * Remove the specified resource from storage.
     * @param Consultation $consultation
     * @return JsonResponse
     */
    public function destroy(Consultation $consultation): JsonResponse
    {
        try {
            $this->contract->remove($consultation);
            return $this->respondWithSuccess(__('messages.deleted'));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }

    /**
     * active & inactive the specified resource from storage.
     * @param Consultation $consultation
     * @return JsonResponse
     */
    public function changeActivation(Consultation $consultation): JsonResponse
    {
        try {
            $this->contract->toggleField($consultation, 'is_active');
            return $this->respondWithModel($consultation->load($this->relations));
        }catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
}
