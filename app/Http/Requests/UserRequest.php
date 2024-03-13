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
        $validated['user']['email'] = $validated['email'] ?? null;
        $validated['user']['phone'] = $validated['phone'] ?? null;
        $validated['user']['password'] = $validated['password'] ?? null;
        $validated['user']['role_id'] = resolve(RoleContract::class)->findBy('name', $role)?->id;
        unset($validated['name'], $validated['email'], $validated['phone'], $validated['password']);
        return $validated;
    }

    public function validated($key = null, $default = null)
    {
        $validated = parent::validated($key, $default);
        $role = resolve(RoleContract::class)->findBy('name', $validated['role_id'])->name;
        if ($this->route('user')) {
            $this->route('user')->removeRole($role);
        }
        return self::prepareUserForRoles($validated, $role);
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
        $rules = [
            'name' => config('validations.string.req'),
            'email' => sprintf(config('validations.email.req'), 'users', 'email').','.$this->route('user')?->id,
            'phone' => config('validations.phone.req').'|unique:users,phone,'.$this->route('user')?->id,
            'image' =>  'nullable|image|mimetypes:image/jpeg,image/png',
            'role_id' =>  'required|exists:roles,id,is_active,1',
        ];

        if ($this->getMethod() === 'POST') {
            $rules['password'] = config('validations.password.req');
        }else{
            $rules['password'] = config('validations.password.null');
        }
        return $rules;
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
