<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    //
    public function coffee()
    {
        return $this->belongsToMany('App\Coffee');
    }
}
