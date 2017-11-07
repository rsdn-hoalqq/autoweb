<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use App\Http\Requests\getProductRequest;
use App\Categories;
use App\Product;
use App\User;
use App\Images;
use DB;
use Session;
class ProductController extends Controller
{
    public function getAdd(Request $request){
    	// $makeSession = $request->session()->put('key', 'value');
    	// echo $request->session()->get('key');
    	$cates = Categories::select('id','name','parent_id')->orderBy('order_by')->get()->toArray();
    	return view('admin/product/add',compact('cates'));
    }

    public function postAdd(getProductRequest $request){
    	$cates 	= new Categories;
    	$img 	= new Images;
    	// test transection
  		DB::beginTransaction();

		try {
		    // $img = new Images;
		    // $img = new Categories;
	    	// $img->name = $request->txtName;
	    	// $img->product_id = $request->cate_id;
	    	// $img->published = 1;
    		// $files = $request->file(); 
    		$file = $request->file('image1');
	    	$destinationPath = public_path().'/files/product/';
	    	// $file->move($destinationPath,$file->getClientOriginalName());
	    	$file->rename($destinationPath,$file->getClientOriginalName());

    	foreach ($files as $key => $file) {
    		echo $file->getClientOriginalName();
    	}
		    DB::commit();// all good
		} catch (\Exception $e) {
		    DB::rollback();// something went wrong
		}
    	// end test
    	// $cates = Categories::select('id','name','parent_id')->orderBy('order_by')->get()->toArray();
    	// return view('admin/product/add',compact('cates'));
    }
}
