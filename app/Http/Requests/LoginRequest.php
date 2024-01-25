<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'phone'    => config('validations.phone.req'),
            'verification_code' => config('validations.verification_code.req'),
            'device_name' => config('validations.string.null'),
            'device_id' => config('validations.string.null'),
            'device_os_version' => config('validations.string.null'),
            'app_version' => config('validations.string.null'),
            'timezone' => config('validations.string.null'),
            'fcm_token' => config('validations.string.null'),
        ];
    }
}
