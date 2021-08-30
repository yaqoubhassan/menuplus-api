<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreWaiterRequest extends FormRequest
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
            'fullname' => 'required|string',
            'restaurant_id' => 'required|integer',
            'phone_number' => 'required|string|unique:waiters',
            'pin' => 'required|string|unique:waiters',
            'profile_pic' => 'nullable|mimes:png,jpg,jpeg|max:2048',
            'employment_type' => ['nullable', Rule::in(['casual', 'part-time', 'full-time'])],
            'on_shift' => ['nullable', Rule::in(['on', 'yes'])]
        ];
    }
}
