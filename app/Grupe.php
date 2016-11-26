<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupe extends Model
{
    protected $table = 'grupes';
//    public function kruvis()
//    {
//        return $this->hasMany('App\Kruvis');
//    }

    public function programa()
    {
        return $this->belongsTo('App\Programa');
    }

}
