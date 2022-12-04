<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\User;

class KYC extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'type', 'file', 'issue', 'approved', 'admin_username'];

    public function user()
        {
            return $this->belongsTo(User::class);
        }
     public function scopeFilter($query, $filter)
    {

        try {
            $fields = ['user_id', 'type', 'file', 'issue', 'approved', 'admin_username'];

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

    public function approveId()
    {
        $this->update([
            'approved' => true,
        ]);
    }
}
