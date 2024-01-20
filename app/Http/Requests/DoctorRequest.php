<?php

namespace App\Http\Requests;

use App\Constants\RoleNameConstants;
use App\Repositories\Contracts\RoleContract;
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
        return UserRequest::prepareUserForRoles($validated, RoleNameConstants::DOCTOR->value);
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
            'email' => sprintf(config('validations.email.null'), 'users', 'email'),
            'phone' => config('validations.phone.req'). '|unique:users,phone',
            'password' => config('validations.password.req'),
            'specialities' => config('validations.array.req'),
            'specialities.*' => sprintf(config('validations.model.req'), 'academic_degrees'),
            'academic_degree' => sprintf(config('validations.model.req'), 'academic_degrees'),
            'national_id' => config('validations.string.null'),
            'university' => config('validations.string.null'),
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
