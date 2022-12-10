<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model {
	protected $fillable = ['user_id', 'amount','type', 'pop','transaction_ref','payment_method', 'reference', 'active', 'sent', 'confirmed', 'reference', 'currency_code'];
	protected $appends = array('confirmedTransaction', 'nullTransaction', 'sentTransaction');

	public function getConfirmedTransactionAttribute() {
		return $this->where('sent', true)->where('confirmed', true)->where('active', false);
	}
	public function getSentTransactionAttribute() {
		return $this->where('sent', true)->where('confirmed', false);
	}
	public function getNullTransactionAttribute() {
		return $this->where('sent', false)->where('confirmed', false);
	}

	public function user() {
		return $this->belongsTo(User::class);
	}
	public function scopeFilter($query, $filter) {

		try {

			$fields = ['user_id', 'amount','type', 'dateAfter', 'dateBefore', 'active', 'sent', 'confirmed', 'reference', 'currency_code'];

			return $query->where(
				function ($query) use ($filter, $fields) {

					foreach ($filter as $key => $val) {

						if (in_array($key, $fields)) {

							if ($key == 'dateBefore') {
								if(!empty($val)){
									$val = Carbon::parse($val);
									$query->where("updated_at", "<=", $val);
								}
								continue;
							} elseif ($key == 'dateAfter') {
								if(!empty($val)){
									$val = Carbon::parse($val);
									$query->where("updated_at", ">=", $val);
								}
								continue;
							}

							$query->where($key, $val);

						}
					}
					return $query;

				});

		} catch (Exception $bug) {

			return $this->exception($bug);
		}

	}
}
