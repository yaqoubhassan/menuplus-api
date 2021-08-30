<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRestaurantRequest extends FormRequest
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
            'name' => 'filled|string|unique:restaurants',
            'state' => 'filled|string',
            'city' => 'filled|string',
            'suburb' => 'filled|string',
            'business_type' => ['filled', Rule::in(['Cafe & Takeaway', 'Restaurants', 'Pubs & Clubs', 'Hotels & Service Apartments'])],
            'fullname' => 'filled|string',
            'address' => 'filled|string',
            'phone_number' => 'filled|string|unique:restaurants',
            'email' => 'filled|string|email|max:255|unique:restaurants',
            'status' => 'filled|boolean',
            'capacity' => 'filled|integer',
            'description' => 'sometimes|string',
            'logo' => 'nullable|mimes:png,jpg,jpeg|max:2048',
            'staff_qr_key' => 'nullable|string',
            'customer_qr_key' => 'nullable|string'
        ];
    }
}
