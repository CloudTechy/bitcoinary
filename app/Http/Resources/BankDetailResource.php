<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\User;

class BankDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $user = User::findOrFail($this->user_id);
        return [
            'id' => $this->id,
            'user_id' =>  $user->id,
            'owner' => $user->last_name . ' ' . $user->first_name,
            'payment_method' => $this->payment_method,
            'currency_type' => $this->currency_type,
            'wallet' =>  $this->wallet,
            'swift_code' =>  $this->swift_code,
            'acc_name' =>  $this->acc_name,
            'acc_number' =>  $this->acc_number,
            'bank_name' => empty($this->bank) ? null : $this->bank->name,
        ];
    }
}
