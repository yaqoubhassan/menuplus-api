<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDinerRequest extends FormRequest
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
            'phoneNumber' => 'required|string|unique:dinners',
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|string|email|max:255|unique:dinners',
            'profile_pic' => 'nullable|mimes:png,jpg,jpeg|max:2048',
            'temp_restaurant_id' => 'nullable|integer'
        ];
    }
}
