<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_profile extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function industry()
    {
        return $this->hasOne('App\Industry');
    }
}