<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    public function type(){
        return $this->hasMany('App\Type','ID');
    }
    public function bills(){
        return $this->belongsTo('App\Guest');
    }
}
