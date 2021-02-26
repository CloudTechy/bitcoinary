<?php

namespace App\Http\Resources;

use App\Package;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class PackageUserResource extends JsonResource {
	/**
	 * Transform the resource into an array.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function toArray($request) {
		$user = User::find($this->user_id);
		$package = Package::find($this->package_id);
		return [
			'id' => $this->id,
			'name' =>$package->name,
			'first_level_ref_commission' => $package->first_level_ref_commission,
			'second_level_ref_commission' => $package->second_level_ref_commission,
			'username' => $user->username,
			'owner' => $user->last_name . ' ' . $user->first_name,
			'amount' => $this->amount,
			'expiration' => $this->expiration,
			'turnover' => $package->turnover,
			'loop' => $this->loop,
			'roi' => ($this->roi / 100) * (int) $this->amount, // yet to be implemented
			'pop' => $this->pop,
			'transaction_id' => $this->transaction_id,
			'expired' => !empty($this->expiration) && $this->active == false ? true : false,
			'active' => $this->active,
			'unsubscribed' => empty($this->expiration) && $this->active == false ? true : false,
			'date' => Carbon::createFromTimeStamp(strtotime($this->created_at))->diffForHumans(),
			'created_at' => $this->created_at->format('Y-m-d H:i:s'),
			'updated_at' => $this->updated_at->format('Y-m-d H:i:s'),
		];
	}
}
