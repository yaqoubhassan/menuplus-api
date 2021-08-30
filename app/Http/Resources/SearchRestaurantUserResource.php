<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SearchRestaurantUserResource extends JsonResource
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
            'restaurant_name' => $this->name,
            'name' => $this->fullname,
            'phone_number' => $this->phone_number,
            'email' => $this->email
        ];
    }
}
