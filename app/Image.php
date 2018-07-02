<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Type;

class Image extends Model
{
    public function type(){
        return $this->hasMany('App\Type', 'ID');
    }
    public function type(){
        return $this->belongsTo('App\Type');
    }
}
