<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
	protected $fillable = [
		
	]
    
    public function guest(){
        return $this->belongsTo('App\Guest');
    }

    public function rate(){
        return $this->belongsTo('App\Rate');
    }

    public function Image(){
        return $this->hasMany('App\Image','img_Id');
    }

}
