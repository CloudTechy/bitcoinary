<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\duration;

class PackageResource extends JsonResource {
	/**
	 * Transform the resource into an array.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */

	public function toArray($request) {
		$duration = duration::findOrFail($this->turnover);
		return [
			'id' => $this->id,
			'name' => $this->name,
			'min_deposit' => (int) $this->min_deposit,
			'max_deposit' => (int) $this->max_deposit,
			'roi' => (float) $this->roi,
			'turnover' => (int) $this->turnover,
			'status' => (bool) $this->status,
			'capital_back' => (bool) $this->capital_back,
			'return_for' => $this->return_for,
			'amount_type' => $this->amount_type,
			'amount' => (float)  $this->amount,
			'rank' => $this->rank,
			'duration' => $duration->description,
			'loop_termination' => (int)  $this->loop_termination,
			'first_level_ref_commission' =>(float)  $this->first_level_ref_commission,
			'second_level_ref_commission' =>(float)  $this->second_level_ref_commission,
		];
	}
}
