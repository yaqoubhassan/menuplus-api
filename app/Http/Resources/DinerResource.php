<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DinerResource extends JsonResource
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
            'firstName' => $this->firstname,
            'lastName' => $this->lastname,
            'email' => $this->email,
            'phoneNumber' => $this->phoneNumber,
            'profile_pic' => $this->profile_pic,
            'temp_restaurant_id' => $this->temp_restaurant_id,
            'created_at' => $this->created_at,
            'user_type' => 'Diner'
        ];
    }
}
