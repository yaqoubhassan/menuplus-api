<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WaiterResource extends JsonResource
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
            'restaurant_id' => $this->restaurant_id,
            'fullname' => $this->fullname,
            'phone_number' => $this->phone_number,
            'pin' => $this->pin,
            'profile_pic' => $this->profile_pic,
            'employment_type' => $this->employment_type,
            'on_shift' => $this->on_shift,
            'created_at' => $this->created_at,
            'user_type' => 'Waiter'
        ];
    }
}
