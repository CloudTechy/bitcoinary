<?php

namespace App\Http\Resources;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource {
	/**
	 * Transform the resource into an array.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function toArray($request) {
		$user = User::find($this->user_id);
		return [
			'id' => $this->id,
			'user_id' => $user->id,
			'username' => $user->username,
			'image' => empty($user->image) ? 'undefined.jpg' : $user->image,
			'owner' => $user->last_name . ' ' . $user->first_name,
			'amount' => $this->amount,
			'sent' => (bool) $this->sent,
			'pop' => $this->pop,
			'confirmed' => (bool) $this->confirmed,
			'transaction_ref' =>  $this->transaction_ref ,
			'type' =>  $this->type,
			'payment_method' => $this->payment_method,
			'reference' => $this->reference,
			'currency_code' => $this->currency_code,
			'date' => Carbon::createFromTimeStamp(strtotime($this->created_at))->isoFormat('MMM Do YY, h:mm a'),
			'created_at' => $this->created_at->format('Y-m-d'),
			'updated_at' => $this->updated_at->format('Y-m-d H:i:s'),
		];
	}
}
