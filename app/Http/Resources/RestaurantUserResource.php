<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RestaurantUserResource extends JsonResource
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
            'restaurant_name' => $this->restaurant->name,
            'fullname' => $this->fullname,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'access_rights' => $this->access_rights,
            'profile_pic' => $this->profile_pic,
            'created_at' => $this->created_at,
            'user_type' => 'Restaurant User'
        ];
    }
}
