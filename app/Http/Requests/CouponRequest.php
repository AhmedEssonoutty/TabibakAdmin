<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\JsonValidationTrait;

class CouponRequest extends FormRequest
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
            'code' => config('validations.string.req'),
            'discount_type' => 'required|in:1,2',
            'discount_amount' => config('validations.double.req') . '|min:1' . $this['discount_type'] == 1 ? '|max:100' : '',
            'valid_from' => config('validations.date.req'),
            'valid_to' => config('validations.date.req') .'|after:valid_from',
            'description' => config('validations.string.null'),
            'specialities' => config('validations.array.req'),
            'specialities.*' => sprintf(config('validations.model.req'), 'academic_degrees'),
            'user_limit' => config('validations.integer.req'),
            'total_limit' => config('validations.integer.req'),
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
