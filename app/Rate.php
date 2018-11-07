<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Hotel;

class Rate extends Model
{
    public function hotel()
    {
    	return $this->belongsTo('App\Hotel', 'hotels_id');
    }
}
