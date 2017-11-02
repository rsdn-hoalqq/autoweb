<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'images';
    protected $fillable = ['name','path','product_id','published'];
    public function product(){
    	return $this->belongsTo('App\Product');
    }
}
