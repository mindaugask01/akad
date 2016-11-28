<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kruvis extends Model
{
    protected $table = 'kruvis';
    protected $fillable = ['id', 'module_id', 'grupe_id', 'teacher_id', 'created_at', 'updated_at'];
    /*public function teacher()
    {
        return $this->belongsTo('App\Teacher');
    }*/

    public function grupe()
    {
        return $this->belongsTo('App\Grupe');
    }

    public function module()
    {
        return $this->belongsTo('App\Module');
    }
/*    public function teacher() 
    {
        return $this->belongsTo('App\Teacher');    
    }*/

    public function programa()
    {
        return $this->belongsTo('App\Programa');
    }

    public function valanda()
    {
        return $this->belongsTo('App\Valanda');
    }


    
    
/*       

    public function module()
    {
        return $this->hasMany('App\Module');
    }

    public function grupe()
    {
        return $this->hasMany('App\Grupe');
    }

    public function programa()
    {
        return $this->hasMany('App\Programa');
    }*/
}
