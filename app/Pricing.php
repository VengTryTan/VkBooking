<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    public function hotel()
    {
    	return $this->belongsTo('App\Hotel', 'hotels_id');
    }
}
