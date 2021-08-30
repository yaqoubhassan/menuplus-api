<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDishRequest extends FormRequest
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
            'menu_id' => 'required|integer',
            'name' => 'required|string',
            'description' => 'required|string',
            'chef_note' => 'required|string',
            'price' => 'required|numeric|gt:0',
            'CKPref.*.name' => 'string',
            'CKPref.*.addcost' => 'numeric|gte:0',
            'SD.*.name' => 'string',
            'SD.*.price' => 'numeric|gte:0',
            'menu_id' => 'required|integer',
            'image_1' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'image_2' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
            'image_3' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
            'SD.*.img' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ];
    }
}
