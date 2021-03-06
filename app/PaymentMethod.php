<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
   protected $fillable = ['name',  'rank',  'show_on' , 'image' ,'type'];
   public $timestamps = false;
   public $incrementing = false;
   protected $keyType = "string";
   public $primaryKey = "name";

   public function scopeFilter($query, $filter)
    {

        try {
            $fields = ['name',  'rank',  'show_on' , 'image' ,'type'];

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

    public function getRouteKeyName(){
        return 'name';
    }
}
