<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRestaurantRequest extends FormRequest
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
            'name' => 'required|string|unique:restaurants',
            'state' => 'string',
            'city' => 'string',
            'suburb' => 'string',
            'post_code' => 'string',
            'business_type' => ['string', Rule::in(['Cafe & Takeaway', 'Restaurants', 'Pubs & Clubs', 'Hotels & Service Apartments'])],
            'fullname' => 'nullable|string',
            'address' => 'required|string',
            'phone_number' => 'required|string|unique:restaurants',
            'email' => 'required|string|email|max:255|unique:restaurants',
            'status' => 'sometimes|boolean',
            'capacity' => 'nullable|integer',
            'description' => 'nullable|string',
            'logo' => 'nullable|mimes:png,jpg,jpeg|max:2048',
            'staff_qr_key' => 'nullable|string',
            'customer_qr_key' => 'nullable|string'
        ];
    }
}
