<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Rate extends Model
{
    public function type(){
        return $this->hasMany('App\Type','ID');
    }
}
