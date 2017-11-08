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
    public function index(){
        $products = Product::select('id','name','description','cate_id','status')->get()->toArray();
        // dd($products);
        return view('admin.product.index',compact('products'));
    }

    public function getAdd(Request $request){
    	// $makeSession = $request->session()->put('key', 'value');
    	// echo $request->session()->get('key');
    	$cates = Categories::select('id','name','parent_id')->orderBy('order_by')->get()->toArray();
    	return view('admin/product/add',compact('cates'));
    }

    public function postAdd(getProductRequest $request){
    	$prd 	= new Product;
    	$img 	= new Images;
        
    	// test transection
  		DB::beginTransaction();

		try {

            // $prd->name = $request->txtName;
            // $prd->description = $request->txtDescription;
            // $prd->price = $request->txtPrice;
            // $prd->cate_id = $request->cate_id;
            // $prd->status = $request->status;
            // $id = $prd->save();
            
            // $prd->type = $request->type;
            // $prd->content = $request->txtContent;
            

            // dd($prd->id);
            // print_r($prd);
            // $id = $prd->id;
            // dd($id);
		    // $img = new Images;
		    // $img = new Categories;
	    	// $img->name = $request->txtName;
	    	// $img->product_id = $request->cate_id;
	    	// $img->published = 1;
    		$files = $request->file();
            if(isset($files)){
                dd($files);
            } 
    		// $file = $request->file('image1');
	    	// $destinationPath = public_path().'/files/product/';
	    	// $file->move($destinationPath,$file->getClientOriginalName());
	    	// $file->rename($destinationPath,$file->getClientOriginalName());

    	// foreach ($files as $key => $file) {
    	// 	echo $file->getClientOriginalName();
    	// }
		    DB::commit();// all good
		} catch (\Exception $e) {
            dd($e);
		    DB::rollback();// something went wrong
		}        
    	// end test
    	// $cates = Categories::select('id','name','parent_id')->orderBy('order_by')->get()->toArray();
    	// return view('admin/product/add',compact('cates'));
    }
    public function getEdit($id){
        $cates = Categories::select('id','name','parent_id')->orderBy('order_by')->get()->toArray();
        $data = Product::findOrFail($id)->toArray();
        return view('admin.product.edit',compact('data','cates'));
    }

    public function postEdit(getProductRequest $request, $id){
        $prd    = new Product;
        $img    = new Images;
        dd($request->file());
        // test transection
        DB::beginTransaction();

        try {

            // $prd->name = $request->txtName;
            // $prd->description = $request->txtDescription;
            // $prd->price = $request->txtPrice;
            // $prd->cate_id = $request->cate_id;
            // $prd->status = $request->status;
            // $id = $prd->save();
            
            // $prd->type = $request->type;
            // $prd->content = $request->txtContent;
            $files = $request->file();
            if(isset($files)){
                dd($files);
            } 
            // $file = $request->file('image1');
            // $destinationPath = public_path().'/files/product/';
            // $file->move($destinationPath,$file->getClientOriginalName());
            // $file->rename($destinationPath,$file->getClientOriginalName());

        // foreach ($files as $key => $file) {
        //  echo $file->getClientOriginalName();
        // }
            DB::commit();// all good
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();// something went wrong
        } 
    }
}
