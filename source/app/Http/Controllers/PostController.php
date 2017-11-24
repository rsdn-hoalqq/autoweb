<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\getProductRequest;
use App\Category;
use App\Post;
use App\User;
use App\Images;
use App\Videos;
use DB;
use Session;
class PostController extends Controller
{
    public function index(){
        $posts = Post::select('id','name','description','cate_id','status')->get()->toArray();
        return view('admin.post.index',compact('posts'));
    }

    public function viewProduct($id){
        $product = Post::findOrFail($id)->toArray();
        $images = Post::findOrFail($id)->image()->get()->toArray();
        return view('admin.post.view',compact('product','images'));
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
    	$cates = Category::select('id','name','parent_id')->orderBy('order_by')->get()->toArray();
    	return view('admin/post/add',compact('cates'));
    }

    public function postAdd(getProductRequest $request){
    	$prd 	= new Post;
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
                    $img->post_id    = $id;
                    $img->published     = 1;
                    $img->name          = $imageAvatar;
                    $img->save();
                }
            }
            // handle save video
            if(!empty($request->path)){
                $video = new Videos();
                $video->post_id = $id;
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
            dd($errors);
            $message = "Update sản phẩm không thành công";
            $alert = 'danger';
        }        
        // end test
        $cates = Category::select('id','name','parent_id')->orderBy('order_by')->get()->toArray();
        return view('admin/post/add',compact('cates'))->with(['alert'=>$alert,'message_flag'=>$message]);
    }
    public function getEdit($id){
        $cates = Category::select('id','name','parent_id')->orderBy('order_by')->get()->toArray();
        $data = Post::findOrFail($id)->toArray();
        $images = Post::findOrFail($id)->image()->get()->toArray();
        return view('admin.post.edit',compact('data','cates','images'));
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
                    $img->post_id       = $id;
                    $img->published     = 1;
                    $img->name          = $imageAvatar;
                    $img->save();
                }
            }
            // handle save video
            if(!empty($request->path)){
                $video = new Videos();
                $video->post_id = $id;
                $video->path = $request->path;
                $video->published = 0;
                $video->name = empty($request->nameVideo) ? $request->txtName : $request->nameVideo;
                $video->save();
            }
            
            $prd = Post::find($id);
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
            dd($errors);
            $message = "Update sản phẩm không thành công";
            $alert = 'danger';
        } 
        return redirect()->route('listProduct')->with(['alert'=>$alert,'message_flag'=>$message]);
    }

    public function upload(Request $request){
        $data = $request->file('croppedImage');
        $files = $_FILES['croppedImage'];
        return \Response::json($files);
    }
}
