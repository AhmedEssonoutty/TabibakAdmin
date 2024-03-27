<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\JsonValidationTrait;

class FaqSubjectRequest extends FormRequest
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
            'name.ar' => config('validations.string.req') . '|unique:faq_subjects,name->ar,' .$this->route('faq_subject')?->id,
            'name.en' => config('validations.string.req') . '|unique:faq_subjects,name->en,' .$this->route('faq_subject')?->id,
        ];
    }

    /**
     * Customizing input names displayed for user
     * @return array
     */
    public function attributes() : array
    {
        return [
            'name.ar' => __('messages.name_ar'),
            'name.en' => __('messages.name_en'),
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
