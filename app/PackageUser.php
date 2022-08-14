<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class PackageUser extends Model {
	protected $table = 'package_user';
	protected $fillable = [ 'user_id', 'pop', 'loop',  'roi',  'transaction_id', 'package_id', 'amount', 'referral', 'expiration', 'active'];
	public function user() {

		return $this->belongsTo(User::class);  

	}

	public function package() {

		return $this->belongsTo(Package::class);

	}
	public function transaction() {

		return $this->belongsTo(Transaction::class);

	}

	public function scopeFilter($query, $filter) {

		try {

			$fields = [ 'user_id', 'username', 'pop', 'loop', 'roi',  'transaction_id', 'package_id', 'referral', 'amount', 'expiration', 'active'];

			return $query->where(
				function ($query) use ($filter, $fields) {

					foreach ($filter as $key => $val) {

						if (in_array($key, $fields)) {

							if ($key == 'dateBefore') {
								$val = Carbon::parse($val);
								$query->where("created_at", "<=", $val);
								continue;
							} elseif ($key == 'dateAfter') {
								$val = Carbon::parse($val);
								$query->where("created_at", ">=", $val);
								continue;
							}
							if ($key == 'username') {
								$users = User::where('username','LIKE', '%'.$val. '%')->get();
								$userID = [];

								foreach($users as $user){
									array_push($userID, $user->id);	
								}
								$query->whereIn("user_id", $userID);
								
								continue;
							};

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
