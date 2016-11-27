<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valanda extends Model
{
    protected $table = 'valandos';
    public function kruvis()
    {
        return $this->hasMany('App\Module');
    }
}
