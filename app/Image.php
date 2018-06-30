<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function type(){
        return $this->belongTo('App\Type');
    }
}
