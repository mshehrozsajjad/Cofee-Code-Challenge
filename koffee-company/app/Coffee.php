<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    //
    protected $fillable = ['product_id'];
    public function addon()
    {
        return $this->belongsToMany('App\Product');
    }
    public function base()
    {
        return $this->belongsTo('App\Product');
    }
    public function sales()
    {
        return $this->belongsToMany('App\Sale');
    }
}
