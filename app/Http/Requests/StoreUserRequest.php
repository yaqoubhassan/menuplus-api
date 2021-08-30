<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|string|email|max:255|unique:users',
            'number' => 'required|string|unique:users',
            'activated' => 'sometimes|boolean',
            'access_rights' => ['required', Rule::in(['all','write_only','read_only','none'])],
            'password' => 'required',
            'profile_pic' => 'nullable|mimes:png,jpg,jpeg|max:2048'
        ];
    }
}
