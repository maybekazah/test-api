<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
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
            'email' => 'required|string|email',
            'type' => 'required|string',
            'github' => 'required|string',
            'city' => 'required|string',
//            'is_finished' => 'boolean',
            'phone' => 'required|string',
            'birthday' => 'required|string',
//            'password' => 'required|string',
        ];
    }
}
