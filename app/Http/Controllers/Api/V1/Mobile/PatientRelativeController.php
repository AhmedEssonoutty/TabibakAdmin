<?php

namespace App\Http\Controllers\Api\V1\Mobile;

use App\Http\Controllers\Api\V1\BaseApiController;
use App\Http\Requests\PatientRelativeRequest;
use App\Http\Resources\PatientResource;
use App\Models\Patient;
use App\Repositories\Contracts\PatientContract;

class PatientRelativeController extends BaseApiController
{
    public function __construct(PatientContract $contract)
    {
        parent::__construct($contract, PatientResource::class);
    }

    public function index(): mixed
    {
        request()->merge(['parent' => auth()->user()->patient?->id]);
        return parent::index();
    }

    public function store(PatientRelativeRequest $request)
    {
        $patient = $this->contract->create($request->validated());
        return $this->respondWithModel($patient->load('user'));
    }

    public function destroy(Patient $relative)
    {
        if ($relative->parent_id !== auth()->user()->patient?->id)
            return $this->respondWithError(__('messages.actions_messages.cannot_do_action'), 403);
        $this->contract->remove($relative);
        return $this->respondWithSuccess(__('messages.actions_messages.delete_success'));
    }

}
