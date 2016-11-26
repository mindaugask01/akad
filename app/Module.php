<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table = 'modules';

    public function kruvis()
    {
        return $this->hasMany('App\Kruvis');
    }

//    public function kruvis()
//    {
//        return $this->hasMany('App\Kruvis');
//    }

    public function programa()
    {
        return $this->belongsTo('App\Programa');
    }
}
