<?php

namespace App\Http\Resources;

use App\Http\Resources\RestaurantUserResource;
use Illuminate\Http\Resources\Json\JsonResource;

class RestaurantResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'state' => $this->state,
            'city' => $this->city,
            'suburb' => $this->suburb,
            'post_code' => $this->post_code,
            'business_type' => $this->business_type,
            'address' => $this->address,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'status' => $this->status,
            'capacity' => $this->capacity,
            'description' => $this->description,
            'logo' => $this->logo,
            'staff_qr_key' => $this->staff_qr_key,
            'customer_qr_key' => $this->customer_qr_key,
            'created_at' => $this->created_at,
            'restaurant_user' => new RestaurantUserResource($this->user) 
        ];
    }
}
