<?php

namespace App;
use App\Album;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable=array('album_id','description','photo','title');
    public function album(){
    	return $this->belongsTo('App\Album');
    }
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
