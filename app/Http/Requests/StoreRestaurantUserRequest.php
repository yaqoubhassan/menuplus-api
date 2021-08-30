<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRestaurantUserRequest extends FormRequest
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
            'fullname' => 'nullable|string',
            'restaurant_id' => 'required|integer',
            'password' => 'required',
            'phone_number' => 'required|string|unique:restaurant_users',
            'email' => 'required|string|email|max:255|unique:restaurant_users',
            'access_rights' => ['nullable', Rule::in(['all','write_only','read_only','none'])],
            'profile_pic' => 'nullable|mimes:png,jpg,jpeg|max:2048',
        ];
    }
}
