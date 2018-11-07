<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Rate;

class Hotel extends Model
{
    public function rate()
    {
    	return $this->hasMany('App\Rate');
    }
}
