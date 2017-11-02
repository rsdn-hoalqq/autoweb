<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    protected $table = 'videos';
    protected $fillable = ['name','path','product_id','published'];
    public function product(){
    	return $this->belongsTo('App\Product');
    }
}
