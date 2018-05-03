<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    protected $guarded = [];

    public function profile()
    {
        return $this->belongsTo('App\User_profile');
    }

}