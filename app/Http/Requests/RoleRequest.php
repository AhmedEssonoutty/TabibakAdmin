<?php

namespace App\Http\Requests;

use App\Traits\JsonValidationTrait;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RoleRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:2', 'max:190',
                Rule::unique('roles')->ignore($this->role?->id)->whereNull('deleted_at'),
            ],
            'role_permissions' => config('validations.array.req'),
            'role_permissions.*' => sprintf(config('validations.model.req'), 'permissions')
        ];
    }
}
