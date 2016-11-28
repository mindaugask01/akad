<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valanda extends Model
{
    protected $table = 'valandos';
    public function module()
    {
        return $this->hasMany('App\Module');
    }

    public function kruvis()
    {
        return $this->belongsTo('App\Kruvis');
    }

    public function teacher()
    {
        return $this->belongsTo('App\Teacher');
    }

    /*public function teacher()
    {
        return $this->belongsToMany('App\Teacher', 'teachers_valandos', 'teacher_id', 'valandos_id');
    }*/
}
