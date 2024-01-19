<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\JsonValidationTrait;

class PatientRequest extends FormRequest
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
            'name' => config('validations.string.req'),
            'date_of_birth' => config('validations.date.req'),
            'phone' => config('validations.string.req'),
            'password' => config('validations.password.req'),
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
