<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Teacher extends Model
{
    protected $table = 'teachers';
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function teacher() {
        return $this->hasMany('App\Kruvis');
    }
}
