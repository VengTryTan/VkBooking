<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    public function guest(){
        return $this->hasMany('App\Guest','ID');
    }
}