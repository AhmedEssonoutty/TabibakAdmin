<?php

namespace App\Http\Requests;

use App\Constants\RoleNameConstants;
use App\Repositories\Contracts\RoleContract;
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

    public static function prepareUserForRoles($validated, $role): array
    {
        $validated['user']['name'] = $validated['name'];
        $validated['user']['email'] = $validated['email'] ?? '';
        $validated['user']['phone'] = $validated['phone'] ?? '';
        $validated['user']['password'] = $validated['password'];
        $validated['user']['role_id'] = resolve(RoleContract::class)->findBy('name', $role)?->id;
        unset($validated['name'], $validated['email'], $validated['phone'], $validated['password']);
        return $validated;
    }

    public function passedValidation(): void
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
            'name' => 'required|min:2|max:200',
            'email' => "required|email|unique:users,email,{$this->id}",
            'phone' => "required|numeric|unique:users,phone,{$this->id}",
            'password' => config('validations.password.req'),
            'role_id' => 'required|exists:roles,id',
            'image' =>  'nullable|max:20480|image',
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
