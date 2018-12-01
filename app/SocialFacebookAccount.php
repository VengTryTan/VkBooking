<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialFacebookAccount extends Model
{
    protected $fillable = ['user_id','provide_user_id','provider'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
