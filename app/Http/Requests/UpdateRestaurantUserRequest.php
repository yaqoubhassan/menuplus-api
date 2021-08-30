<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRestaurantUserRequest extends FormRequest
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
            'fullname' => 'filled|string',
            'restaurant_id' => 'filled|integer',
            'password' => 'filled',
            'phone_number' => 'filled|string|unique:restaurant_users',
            'email' => 'filled|string|email|max:255|unique:restaurant_users',
            'access_rights' => ['nullable', Rule::in(['all','write_only','read_only','none'])],
            'profile_pic' => 'nullable|mimes:png,jpg,jpeg|max:2048',
        ];
    }
}
