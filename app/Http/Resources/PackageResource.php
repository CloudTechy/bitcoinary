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
			'min_deposit' => $this->min_deposit,
			'max_deposit' => $this->max_deposit,
			'roi' => $this->roi,
			'duration' => $this->turnover,
			'turnover' => $duration->description,
			'loop_termination' => $this->loop_termination,
			'first_level_ref_commission' => $this->first_level_ref_commission,
			'second_level_ref_commission' => $this->second_level_ref_commission,
		];
	}
}
