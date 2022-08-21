<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model {
	protected $fillable = ['name', 'roi', 'status' , 'amount','capital_back' ,'return_for' ,'amount_type' , 'min_deposit', 'max_deposit', 'turnover', 'first_level_ref_commission', 'loop_termination', 'second_level_ref_commission'];

	public function portfolio() {
		return $this->belongsTo(Portfolio::class);
	}
	public function users() {
		return $this->belongsToMany(User::class)->withPivot('id', 'roi', 'pop', 'referral', 'transaction_id', 'amount', 'expiration', 'active')->as('subscription')->withTimestamps();

	}

	public function scopeFilter($query, $filter) {

		try {
			$fields = ['name', 'roi', 'min_deposit', 'status' , 'amount','capital_back' ,'return_for' ,'amount_type' , 'max_deposit', 'turnover', 'first_level_ref_commission', 'loop_termination', 'second_level_ref_commission'];

			return $query->where(
				function ($query) use ($filter, $fields) {

					foreach ($filter as $key => $val) {

						if (in_array($key, $fields)) {

							$query->where($key, $val);

						}
					}
					// dd($query->toSql());
					return $query;

				});

		} catch (Exception $bug) {

			return $this->exception($bug);
		}

	}

}
