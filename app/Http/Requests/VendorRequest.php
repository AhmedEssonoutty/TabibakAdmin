<?php

namespace App\Http\Requests;

use App\Constants\RoleNameConstants;
use App\Repositories\Contracts\RoleContract;
use Illuminate\Foundation\Http\FormRequest;
use App\Traits\JsonValidationTrait;

class VendorRequest extends FormRequest
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
        if ($this->route('patient')) {
            $validated['user']['id'] = $this->route('patient')->user_id;
        }
        return UserRequest::prepareUserForRoles($validated, RoleNameConstants::VENDOR->value);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'type' => sprintf(config('validations.model.req'), 'vendors'),
            'name' => config('validations.string.req'),
            'email' => sprintf(config('validations.email.null'), 'users', 'email'),
            'phone' => config('validations.phone.req'). '|unique:users,phone',
            'password' => config('validations.password.req'),
            'address' => config('validations.string.null'),
            'services' => config('validations.array.req'),
            'services.*' => sprintf(config('validations.model.req'), 'vendor_services'),
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
