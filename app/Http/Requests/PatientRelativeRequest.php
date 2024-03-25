<?php

namespace App\Http\Requests;

use App\Constants\RoleNameConstants;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class PatientRelativeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function validated($key = null, $default = null): array
    {
        $validated = parent::validated();
        $validated['parent_id'] = auth()->user()->patient->id;
        return UserRequest::prepareUserForRoles($validated, RoleNameConstants::PATIENT->value);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => config('validations.string.req'),
            'national_id' => config('validations.integer.null'),
            'date_of_birth' => config('validations.date.null'),
            'phone' => config('validations.phone.null').'|unique:users,phone',
        ];
    }
}
