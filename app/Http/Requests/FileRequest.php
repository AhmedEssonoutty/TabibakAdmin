<?php

namespace App\Http\Requests;

use App\Constants\FileConstants;
use Illuminate\Foundation\Http\FormRequest;

class FileRequest extends FormRequest
{
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
        $validated = parent::validated();
        $validated['fileable_type'] = match ($validated['type']){
            FileConstants::FILE_USER_AVATAR->value => 'User',
            FileConstants::FILE_TYPE_ARTICLE_MAIN_IMAGE->value => 'Article',
            default => $validated['fileable_type']
        };
        return $validated;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'faq_subject_id' => 'required|exists:faq_subjects,id',
            'file' => 'required|'.$this->getTypeValidation().'|max:51200',
            'type' => config('validations.string.req').'|in:'.implode(',', FileConstants::values()),
            'fileable_id' => config('validations.integer.null'),
        ];
    }

    public function getTypeValidation(): string|null
    {
        $mixed = $this->accept ?
            config('validations.file.mixed').','.str_replace('.','',$this->accept)
            : config('validations.file.mixed');
        return match(request('type')){
            FileConstants::FILE_USER_AVATAR->value, FileConstants::FILE_TYPE_ARTICLE_MAIN_IMAGE->value
            => config('validations.file.image'),
            default => $mixed
        };
    }

    public function messages(): array
    {
        return [
            'file.max' => __('validation.max.file', ['max' => $this->maxSize]),
        ];
    }
}
