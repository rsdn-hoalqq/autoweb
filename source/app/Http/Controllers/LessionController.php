<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class LessionController extends Controller
{
    public function index(){
    	// return view('admin/lession/form');
    }

    public function add(){
    	$cates = Categories::select('id','name','parent_id')->orderBy('order_by')->get()->toArray();
    	return view('admin/lession/add',compact('cates'));
    }
}
