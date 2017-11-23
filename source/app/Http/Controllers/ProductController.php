<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\getProductRequest;
use App\Categories;
use App\Product;
use App\User;
use App\Images;
use App\Videos;
use DB;
use Session;
class ProductController extends Controller
{
    public function index(){
        $products = Product::select('id','name','description','cate_id','status')->get()->toArray();
        // dd($products);
        return view('admin.product.index',compact('products'));
    }

    public function viewProduct($id){
        $product = Product::findOrFail($id)->toArray();
        $images = Product::findOrFail($id)->image()->get()->toArray();
        return view('admin.product.view',compact('product','images'));
    }

    public function deleteImage($id, Request $request){
        // dd($request->name);
        $pathImage = public_path().'/files/product/'.$request->name;
        Storage::delete($pathImage);
        $image = Images::find($id);
        $image->delete();
        return redirect()->route('viewEdit',$request->product_id)->with(['message'=>'Xóa hình ảnh thành công!']);
    }
    public function getAdd(Request $request){
    	// $makeSession = $request->session()->put('key', 'value');
    	// echo $request->session()->get('key');
    	$cates = Categories::select('id','name','parent_id')->orderBy('order_by')->get()->toArray();
    	return view('admin/product/add',compact('cates'));
    }

    public function postAdd(getProductRequest $request){
        // dd($request->all());
    	$prd 	= new Product;
    	$destinationPath = public_path().'/files/product/';
        // test transection
        DB::beginTransaction();
        try {            
            $prd->name = $request->txtName;
            $prd->description = $request->txtDescription;
            $prd->price = $request->txtPrice;
            $prd->cate_id = $request->cate_id;
            $prd->status = $request->status;
            $prd->save();
            $id = $prd->id;
            $files = $request->file('image');
            // handle save image
            if(!empty($files)){
                foreach ($files as $key => $file) {
                    $img    = new Images;
                    if(empty($request->nameImage[$key])){
                        $imageAvatar = $file->getClientOriginalName();
                    }else{
                        $imageAvatar = $request->nameImage[$key];
                    }
                    
                    $file->move($destinationPath,$imageAvatar);
                    // save image
                    $img->path          = $imageAvatar;
                    $img->product_id    = $id;
                    $img->published     = 1;
                    $img->name          = $request->nameImage[$key];
                    $img->save();
                }
            }
            // handle save video
            if(!empty($request->path)){
                $video = new Videos();
                $video->product_id = $id;
                $video->path = $request->path;
                $video->published = 0;
                $video->name = empty($request->nameVideo) ? $request->txtName : $request->nameVideo;
                $video->save();
            }           
             
            DB::commit();// all good
            $message = "Update sản phẩm thành công";
            $alert = 'success';
        } catch (\Exception $errors) {
            DB::rollback();// something went wrong
            $message = "Update sản phẩm không thành công";
            $alert = 'danger';
        }        
    	// end test
    	$cates = Categories::select('id','name','parent_id')->orderBy('order_by')->get()->toArray();
    	return view('admin/product/add',compact('cates'));
    }
    public function getEdit($id){
        $cates = Categories::select('id','name','parent_id')->orderBy('order_by')->get()->toArray();
        $data = Product::findOrFail($id)->toArray();
        $images = Product::findOrFail($id)->image()->get()->toArray();
        return view('admin.product.edit',compact('data','cates','images'));
    }

    public function postEdit(getProductRequest $request, $id){
        $destinationPath = public_path().'/files/product/';
        // test transection
        DB::beginTransaction();
        try {            
            $files = $request->file('image');
            // handle save image
            if(!empty($files)){
                foreach ($files as $key => $file) {
                    $img    = new Images;
                    if(empty($request->nameImage[$key])){
                        $imageAvatar = $file->getClientOriginalName();
                    }else{
                        $imageAvatar = $request->nameImage[$key];
                    }
                    
                    $file->move($destinationPath,$imageAvatar);
                    // save image
                    $img->path          = $imageAvatar;
                    $img->product_id    = $id;
                    $img->published     = 1;
                    $img->name          = $request->nameImage[$key];
                    $img->save();
                }
            }
            // handle save video
            if(!empty($request->path)){
                $video = new Videos();
                $video->product_id = $id;
                $video->path = $request->path;
                $video->published = 0;
                $video->name = empty($request->nameVideo) ? $request->txtName : $request->nameVideo;
                $video->save();
            }
            
            $prd = Product::find($id);
            $prd->name = $request->txtName;
            $prd->description = $request->txtDescription;
            $prd->price = $request->txtPrice;
            $prd->cate_id = $request->cate_id;
            $prd->status = $request->status;
            $prd->save(); 
            DB::commit();// all good
            $message = "Update sản phẩm thành công";
            $alert = 'success';
        } catch (\Exception $errors) {
            DB::rollback();// something went wrong
            $message = "Update sản phẩm không thành công";
            $alert = 'danger';
        } 
        return redirect()->route('listProduct')->with(['alert'=>$alert,'message_flag'=>$message]);
    }
}
