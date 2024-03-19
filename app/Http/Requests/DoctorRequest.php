<?php

namespace App\Http\Requests;

use App\Constants\RoleNameConstants;
use Illuminate\Foundation\Http\FormRequest;
use App\Traits\JsonValidationTrait;

class DoctorRequest extends FormRequest
{
    use JsonValidationTrait;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    public function validated($key = null, $default = null)
    {
        $validated = parent::validated($key, $default);
        $validated['urgent_consultation_enabled'] = $this->input('urgent_consultation_enabled') === 'on';
        $validated['with_appointment_consultation_enabled'] = $this->input('with_appointment_consultation_enabled') === 'on';
        if ($this->route('doctor')) {
            $validated['user']['id'] = $this->route('doctor')->user_id;
        }
        return UserRequest::prepareUserForRoles($validated, RoleNameConstants::DOCTOR->value);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        $rules = [
            'email' => sprintf(config('validations.email.null'), 'users', 'email').','.$this->route('doctor')?->user_id,
            'specialities' => config('validations.array.req'),
            'specialities.*' => sprintf(config('validations.model.req'), 'medical_specialities'),
            'academic_degree_id' => sprintf(config('validations.model.req'), 'academic_degrees'),
            'university' => config('validations.string.null'),
            'name' => config('validations.string.req'),
            'phone' => config('validations.phone.req').'|unique:users,phone,'.$this->route('doctor')?->user_id,
            'national_id' => config('validations.string.null').'|unique:doctors,national_id,'.$this->route('doctor')?->id,
            'medical_id' => config('validations.string.null').'|unique:doctors,medical_id,'.$this->route('doctor')?->id,
            'urgent_consultation_enabled' => 'nullable|in:on',
            'with_appointment_consultation_enabled' => 'nullable|in:on'
        ];
        if ($this->getMethod() === 'POST') {
            $rules['password'] = config('validations.password.req');
        }else{
            $rules['password'] = config('validations.password.null');
        }
        return $rules;
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
