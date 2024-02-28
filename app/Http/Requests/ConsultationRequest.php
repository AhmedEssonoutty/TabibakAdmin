<?php

namespace App\Http\Requests;

use App\Constants\ConsultationContactTypeConstants;
use App\Constants\ConsultationPaymentTypeConstants;
use App\Constants\ConsultationTypeConstants;
use Illuminate\Foundation\Http\FormRequest;
use App\Traits\JsonValidationTrait;

class ConsultationRequest extends FormRequest
{
    use JsonValidationTrait;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return (bool) auth()->user()->patient;
    }

    public function validated($key = null, $default = null)
    {
        $validated = parent::validated($key, $default);
        $validated['patient_id'] = $validated['patient_id'] ?? $this->user()->patient?->id;
        return $validated;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'patient_id' => sprintf(config('validations.model.null'), 'patients', 'id'),
            'doctor_id' => sprintf(config('validations.model.null'), 'doctors', 'id'),
            'patient_description' => config('validations.text.null'),
            'files' => config('validations.array.null'),
            'files.*' => sprintf(config('validations.model.req'), 'files', 'id'),
            'type' => config('validations.integer.req').'|in:'.implode(',', ConsultationTypeConstants::values()),
            'doctor_schedule_day_shift_id' => 'required_if:type,==,'.ConsultationTypeConstants::WITH_APPOINTMENT->value.'|'.
                sprintf(config('validations.model.null'), 'doctor_schedule_day_shifts', 'id'),
            'contact_type' => config('validations.integer.null').'|required_if:type,==,'.ConsultationTypeConstants::URGENT->value
                .'|in:'. implode(',', ConsultationContactTypeConstants::values()),
            'reminder_at' => 'required_if:type,==,'.ConsultationTypeConstants::WITH_APPOINTMENT->value.'|'.
                config('validations.time.null').'|after:now',
            'payment_type' => config('validations.integer.null').'|in:'. implode(',', ConsultationPaymentTypeConstants::values()),
        ];
    }

    /**
     * Customizing input names displayed for user
     * @return array
     */
    public function attributes() : array
    {
        return [];
    }

    /**
     * @return array
     */
    public function messages() : array
    {
        return [];
    }
}
