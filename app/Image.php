<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function type(){
        return $this->hasMany('App\Type','type_ID');
    }
}
