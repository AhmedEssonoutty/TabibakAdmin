<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'specialities' => config('validations.array.req'),
            'specialities.*' => sprintf(config('validations.model.req'), 'academic_degrees'),
            'academic_degree_id' => sprintf(config('validations.model.req'), 'academic_degrees'),
            'national_id' => config('validations.string.req'),
            'medical_id' => config('validations.string.req'),
            'experience_years' => config('validations.integer.req'),
            'bio' => config('validations.string.req'),
            'files' => config('validations.array.null'),
            'files.*' => sprintf(config('validations.model.req'), 'files','id'),
            'urgent_consultation_enabled' => config('validations.boolean.req'),
            'with_appointment_consultation_enabled' => config('validations.boolean.req'),
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
