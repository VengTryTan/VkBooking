<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function guest(){
        return $this->belongsTo('App\Guest');
    }

    public function rate(){
        return $this->belongsTo('App\Rate');
    }

    public function image(){
        return $this->hasMany('App\Image', 'id');
    }


}
