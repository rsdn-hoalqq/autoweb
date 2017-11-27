<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    protected $table = 'videos';
    protected $fillable = ['name','path','post_id','published'];
    public function post(){
    	return $this->belongsTo('App\post');
    }
}
