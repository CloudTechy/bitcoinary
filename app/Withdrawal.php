<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Carbon\Carbon;

class Withdrawal extends Model
{
    protected $fillable = ['payment_method','reference', 'user_id', 'pop', 'amount', 'processed', 'confirmed', 'currency_code'];
    protected $appends = array('processedWithdrawals', 'confirmedWithdrawals', 'nullWithdrawals');

    public function getConfirmedWithdrawalsAttribute()
    {
        return $this->where('processed', true)->where('confirmed', true);
    }
    public function getNullWithdrawalsAttribute()
    {
        return $this->where('processed', false)->where('confirmed', false);
    }
    public function getProcessedWithdrawalsAttribute()
    {
        return $this->where('processed', true)->where('confirmed', false);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }
    public function scopeFilter($query, $filter)
    {

        try {

            $fields = ['user_id', 'payment_method', 'amount', 'dateAfter', 'dateBefore', 'processed', 'reference', 'confirmed', 'currency_code'];

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

                             if ($key == 'reference' && $val == 'not_bm') {
                                $query->where("reference", "!=", 'BM');
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
    public function approved()
    {
        return $this->confirmed && $this->processed;
    }
}
