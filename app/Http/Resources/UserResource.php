<?php

namespace App\Http\Resources;


use \Illuminate\Http\Request;

class UserResource extends BaseResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray(Request $request) : array
    {
        $this->micro = [
            'id' => $this->id,
            'name' => $this->name,
        ];
        $this->mini = [
            'phone' => $this->phone,
            'email' => $this->email,
        ];
        $this->full = [
            $this->mergeWhen(isset($this->api_token), [
                'token' => $this->api_token,
            ]),
            'is_active' => $this->is_active,
            'created_at' => $this->created_at?->format('Y-m-d H:i:s'),
            'updated_at' => $this->updated_at?->format('Y-m-d H:i:s'),
        ];
        $this->relations = [
            'patient' => $this->relationLoaded('patient') ? new PatientResource($this->patient) : null,
            'doctor' => $this->relationLoaded('doctor') ? new DoctorResource($this->doctor) : null,
        ];
        return $this->getResource();
    }
}
