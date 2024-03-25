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
            'code' => config('validations.string.req').'|unique:coupons,code,'.$this->route('coupon')?->id,
            'discount_type' => 'required|in:1,2',
            'discount_amount' => config('validations.double.req') . '|min:1' . $this['discount_type'] == 1 ? '|max:100' : '',
            'valid_from' => config('validations.date.req').'|after_or_equal:today',
            'valid_to' => config('validations.date.req') .'|after:valid_from',
            'description' => config('validations.string.null'),
            'specialities' => config('validations.array.req'),
            'specialities.*' => sprintf(config('validations.model.active_req'), 'medical_specialities'),
            'user_limit' => config('validations.integer.req'),
            'total_limit' => config('validations.integer.req').'|gte:user_limit',
        ];
    }

    /**
     * Customizing input names displayed for user
     * @return array
     */
    public function attributes() : array
    {
        return [
            'code' => __('messages.code'),
            'discount_type' => __('messages.discount_type'),
            'discount_amount' => __('messages.discount_amount'),
            'valid_from' => __('messages.valid_from'),
            'valid_to' => __('messages.valid_to'),
            'description' => __('messages.description'),
            'specialities' => __('messages.specialities'),
            'user_limit' => __('messages.user_limit'),
            'total_limit' => __('messages.total_limit'),
            'specialities.*' => __('messages.speciality'),
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
