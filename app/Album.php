<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
	protected $fillable=array('name','description','cover_image','created_by');
    public function photos(){
    	return $this->hasMany('App\Photo');
    }
    public function user(){
    	return $this->hasOne('App\User');
    }
    
}
