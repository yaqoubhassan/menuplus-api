<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRestaurantDetailsRequest extends FormRequest
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
            'business_type' => ['filled', Rule::in(['Cafe & Takeaway', 'Restaurants', 'Pubs & Clubs', 'Hotels & Service Apartments'])],
            'phone_number' => 'filled|string|unique:restaurants',
            'email' => 'filled|string|email|max:255|unique:restaurants',
            'capacity' => 'filled|integer',
            'update_at' => 'filled',
            'state' => 'filled|string',
            'city' => 'filled|string',
            'suburb' => 'filled|string',
            'post_code' => 'filled|string',
            'address' => 'filled|string',
        ];
    }
}
