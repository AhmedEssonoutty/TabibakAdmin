<?php

namespace App\Http\Requests;

use App\Traits\JsonValidationTrait;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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

    public function passedValidation()
    {
        $this->merge([
            'name' => [
                'en' => $this->name_en,
                'ar' => $this->name_ar,
            ],
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name_en' => 'required|min:2|max:200',
            'name_ar' => 'required|min:2|max:200',
            'email' => "required|email|unique:users,email,{$this->id}",
            'phone' => "required|numeric|unique:users,phone,{$this->id}",
            'role_id' => 'required|exists:roles,id',
            'employment_start_date' => 'nullable|date',
            'employment_end_date' => 'nullable|date|after:employment_start_date',
            'home_number' => 'nullable',
            'date_of_birth' => 'required|date'
        ];
    }

    /**
     * Customizing input names displayed for user
     * @return array
     */
    public function attributes(): array
    {
        return [

        ];
    }

    /**
     * @return array
     */
    public function messages(): array
    {
        return [
        ];
    }
}
