<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class settings extends Model
{
    protected $fillable = ['notifications','logo','email_verification','site_name', 'investment_from_balance'];
}
