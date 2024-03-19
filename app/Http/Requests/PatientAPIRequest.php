<?php

namespace App\Http\Requests;

use App\Constants\RoleNameConstants;
use Illuminate\Foundation\Http\FormRequest;
use App\Traits\JsonValidationTrait;

class PatientAPIRequest extends FormRequest
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
        $validated['user']['id'] = auth()->id();
        if (auth()->user()->patient)
            $validated['patient_id'] = auth()->user()->patient->id;
        return UserRequest::prepareUserForRoles($validated, RoleNameConstants::PATIENT->value);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => config('validations.string.req'),
            'date_of_birth' => config('validations.date.req'),
            'phone' => config('validations.phone.req').'|unique:users,phone,'.auth()->id(),
            'national_id' => config('validations.string.null').'|unique:patients,national_id,'.auth()->user()->patient?->id,
            'password' => config('validations.password.null')
        ];
    }

    /**
     * Customizing input names displayed for user
     * @return array
     */
    public function attributes() : array
    {
        return [
            'name' => __('messages.name'),
            'date_of_birth' => __('messages.date_of_birth'),
            'phone' => __('messages.phone'),
            'national_id' => __('messages.national_id'),
            'password' => __('messages.password'),
        ];
    }

    /**
     * @return array
     */
    public function messages() : array
    {
        return [];
    }
}
