<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'images';
    protected $fillable = ['name','path','post_id','published'];
    public function post(){
    	return $this->belongsTo('App\Post');
    }
}
