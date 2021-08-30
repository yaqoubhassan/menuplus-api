<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'number' => $this->number,
            'verification_code' => $this->verification_code,
            'profile_pic' => $this->profile_pic,
            'activated' => $this->activated,
            'access_rights' => $this->access_rights,
            'created_at' => $this->created_at,
            'user_type' => 'Super Admin'
        ];
    }
}
