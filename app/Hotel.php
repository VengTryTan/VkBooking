<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pricing;

class Hotel extends Model
{
    public function price()
    {
    	return $this->hasMany('App\Pricing');
    }
}
