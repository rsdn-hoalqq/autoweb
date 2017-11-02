<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name','parent_id','slug','keywords'];
    public function product(){
    	return $this->hasMany('App\Product');
    }
}
