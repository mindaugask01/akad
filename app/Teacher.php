<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Teacher extends Model
{
    protected $table = 'teachers';
    public function user() {
        return $this->belongsTo('App\User');
    }

/*    public function kruvis() {
        return $this->hasMany('App\Kruvis');
    }*/

    public function valanda() {
        return $this->hasMany('App\Valanda');
    }
    
/*    public function valandos()
    {
        return $this->belongsToMany('App\Valanda', 'teachers_valandos', 'teacher_id', 'valandos_id');
    }*/
}
