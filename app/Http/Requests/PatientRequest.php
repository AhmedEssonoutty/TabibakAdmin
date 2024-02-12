<?php

namespace App\Http\Requests;

use App\Constants\PatientSocialStatusConstants;
use App\Constants\RoleNameConstants;
use Illuminate\Foundation\Http\FormRequest;
use App\Traits\JsonValidationTrait;

class PatientRequest extends FormRequest
{
    use JsonValidationTrait;

    private int $userId;

    public function __construct()
    {
        parent::__construct();
        if (auth()->user()->can('update-patient')){
            $userId = $this->route('patient')?->user_id;
        }else{
            $userId = auth()->id();
        }
        $this->userId = $userId;
    }
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
        $userId = $this->userId;
        if ($userId) {
            $validated['user']['id'] = $userId;
        }
        return UserRequest::prepareUserForRoles($validated, RoleNameConstants::PATIENT->value);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        $rules = [
            'name' => config('validations.string.req'),
            'date_of_birth' => config('validations.date.req'),
            'phone' => config('validations.phone.req').'|unique:users,phone,'.$this->userId,
            'national_id' => config('validations.string.null'),
            'social_status' => config('validations.integer.null'). '|in:'.implode(',', array_values(PatientSocialStatusConstants::values())),
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
