<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\JsonValidationTrait;

class FaqRequest extends FormRequest
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
            'question.en' => config('validations.string.req'),
            'question.ar' => config('validations.string.req'),
            'answer.en' => config('validations.string.req'),
            'answer.ar' => config('validations.string.req'),
            'faq_subject_id' => 'required|integer',
        ];
    }

    /**
     * Customizing input names displayed for user
     * @return array
     */
    public function attributes() : array
    {
        return [
            'question.en' => __('messages.question_en'),
            'question.ar' => __('messages.question_ar'),
            'answer.en' => __('messages.answer_en'),
            'answer.ar' => __('messages.answer_ar'),
            'faq_subject_id' => __('messages.faq_subject'),
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
