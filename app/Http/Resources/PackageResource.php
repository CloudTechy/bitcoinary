<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PackageResource extends JsonResource {
	/**
	 * Transform the resource into an array.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function toArray($request) {
		return [
			'id' => $this->id,
			'name' => $this->name . ' Plan',
			'min_deposit' => $this->min_deposit,
			'max_deposit' => $this->max_deposit,
			'roi' => $this->roi,
			'turnover' => $this->turnover,
			'first_level_ref_commission' => $this->first_level_ref_commission,
			'second_level_ref_commission' => $this->second_level_ref_commission,
		];
	}
}
