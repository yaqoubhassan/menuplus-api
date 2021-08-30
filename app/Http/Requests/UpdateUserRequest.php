<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname' => 'filled|string',
            'lastname' => 'filled|string',
            'email' => 'filled|string|email|max:255|unique:users',
            'number' => 'filled|string|unique:users',
            'activated' => 'filled|boolean',
            'access_rights' => ['filled', Rule::in(['all', 'write_only', 'read_only', 'none'])],
            'password' => 'filled',
            'verification_code' => 'nullable|string'
        ];
    }
}
