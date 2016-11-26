<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Grupe;

class Programa extends Model
{
    protected $table = 'programos';
    public function grupe() {
        return $this->hasMany('App\Grupe');
    }

    public function module()
    {
        return $this->hasMany('App\Module');
    }
    
    public function kruvis()
    {
        return $this->belongsTo('App\Kruvis');
    }
}
