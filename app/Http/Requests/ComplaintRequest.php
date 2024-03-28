<?php

namespace App\Http\Requests;

use App\Constants\ComplaintTypeConstants;
use Illuminate\Foundation\Http\FormRequest;
use App\Traits\JsonValidationTrait;

class ComplaintRequest extends FormRequest
{
    use JsonValidationTrait;

    private string $table;

    public function __construct()
    {
        parent::__construct();
        $table = '';
        if (request('complaintable_type') === 'Doctor') {
            $table = 'doctors';
        }elseif (request('complaintable_type') === 'Article') {
            $table = 'articles';
        }
        $this->table = $table;
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
        $validated = parent::validated();
        $validated['user_id'] = auth()->id();
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
            'title' => config('validations.string.null'),
            'description' => config('validations.text.null'),
            'complaintable_type' => config('validations.string.req').'|in:Doctor,Article',
            'complaintable_id' => sprintf(config('validations.model.req'), $this->table),
            'type' => config('validations.integer.null'). '|required_if:complaintable_type,==,Article'
                .'|in:'.implode(',',ComplaintTypeConstants::values())
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
            'description.ar' => __('messages.description_ar'),
            'description.en' => __('messages.description_en'),
            'type' => __('messages.type'),
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
