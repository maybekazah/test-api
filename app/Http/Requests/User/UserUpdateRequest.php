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
            'name' => 'required|string',
            'email' => 'required|email|string',
//            'image' => 'string|required',
//            'about' => 'string|required',
            'type' => 'required|string',
            'github' => 'required|string',
            'city' => 'required|string',
            'phone' => 'required|string',
//            'is_finished' => 'boolean|required',
            'birthday' => 'required|string',
//            'roles' => 'string|required',
        ];
    }
}
