<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name','parent_id','slug','keywords','order_by','id','published'];
    public function product(){
    	return $this->hasMany('App\Post');
    }
}
