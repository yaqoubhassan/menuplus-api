<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SubscriptionPlanResource extends JsonResource
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
            'pricing_id' => $this->pricing_id,
            'restaurant_id' => $this->restaurant_id,
            'status' => $this->status,
            'created_at' => $this->created_at
        ];
    }
}
