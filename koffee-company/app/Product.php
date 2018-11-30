<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['name','price'];
    public function coffee()
    {
        return $this->belongsToMany('App\Coffee');
    }
}
