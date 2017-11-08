<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = ['id','name','description','image','price','cate_id','status','type','content'];
    public function category(){
    	return $this->belongsTo('App\Categories');
    }

    public function image(){
    	return $this->hasMany('App\Images');
    }

    public function video(){
    	return $this->hasMany('App\Videos');
    }
}
