<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if (!auth()->check()) {
            return false;
        }
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'string',
            'email' => 'string|email',
            'image' => 'string',
            'about' => 'string',
            'type' => 'string',
            'github' => 'string',
            'city' => 'string',
            'phone' => 'string',
            'is_finished' => 'boolean',
            'birthday' => 'string',
            'roles' => 'string',
        ];
    }
}
