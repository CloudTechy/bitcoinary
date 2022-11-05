<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = ['department', 'subject', 'message','closing_remark', 'pending_remark', 'user_id', 'status', 'admin_username'];

    public function user()
        {
            return $this->belongsTo(User::class);
        }
     public function scopeFilter($query, $filter)
    {

        try {
            $fields = ['department','subject','closing_remark', 'pending_remark', 'message', 'user_id', 'status', 'admin_username'];

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
