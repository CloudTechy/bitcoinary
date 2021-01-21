<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankDetail extends Model
{
    protected $table = 'bank_details';
    public $timestamps = false;
    protected $fillable = [
        'acc_name', 'acc_number', 'bank_id', 'currency_type', 'swift_code', 'user_id', 'wallet', 'payment_method'
    ];
    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, $filter)
    {

        try {
            $fields = ['acc_name', 'acc_number', 'bank_id', 'currency_type',  'wallet', 'payment_method', 'swift_code', 'user_id'];

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
