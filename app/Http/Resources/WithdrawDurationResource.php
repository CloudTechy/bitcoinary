<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WithdrawDurationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $user = $this->user;
        return [
            'id' => $this->id,
            'user_id' => empty($user) ? null :  $user->id,
            'username' => empty($user) ? null :  $user->username,
            'names' => empty($user) ? null :  $user->last_name . ' '  . $user->first_name,
            'days' => $this->duration,
            'expiration' => $this->expiration
        ];
    }
}
