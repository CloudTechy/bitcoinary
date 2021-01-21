<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model {
	public $timestamps = false;
	protected $fillable = ['name'];

	public function bankDetails() {

		return $this->hasMany(BankDetail::class);
	}
	public function scopeFilter($query, $filter)
    {

        try {
            $fields = ['name'];

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
