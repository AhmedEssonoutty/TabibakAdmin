<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\JsonValidationTrait;

class ArticleRequest extends FormRequest
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

    public function validated($key = null, $default = null): array
    {
        $validated = parent::validated();
        $validated['author_id'] = auth()->id();
        return $validated;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'medical_speciality_id' => 'required|exists:medical_specialities,id',
            'title.ar' => config('validations.string.req'),
            'title.en' => config('validations.string.req'),
            'content.ar' => config('validations.long_text.req'),
            'content.en' => config('validations.long_text.req'),
        ];
    }

    /**
     * Customizing input names displayed for user
     * @return array
     */
    public function attributes() : array
    {
        return [
            'title.ar' => __('messages.title_ar'),
            'title.en' => __('messages.title_en'),
            'content.ar' => __('messages.content_ar'),
            'content.en' => __('messages.content_en'),
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
