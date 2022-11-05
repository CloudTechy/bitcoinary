<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;
    protected $fillable = [
        'occupation', 'purpose', 'reference', 'user_id', 'amount', 'interest_rate', 'monthly_repayment', 'total_repayment', 'tenor','transaction_id', 'approved','active','expiration'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function scopeFilter($query, $filter)
    {

        try {
            $fields =[
        'occupation','purpose', 'reference', 'user_id', 'amount', 'interest_rate', 'monthly_repayment', 'total_repayment', 'tenor','transaction_id', 'approved','active','expiration'
    ];
            return $query->where(
                function ($query) use ($filter, $fields) {

                    foreach ($filter as $key => $val) {

                        if (in_array($key, $fields)) {

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
