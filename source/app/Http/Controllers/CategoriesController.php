<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Categories;
class CategoriesController extends Controller
{
    public function index(){
    	$categorys = Categories::select('id','name','keywords')->get()->toArray();
    	// print_r($categorys);
    	return view('admin.category.index',compact('categorys'));
    }
    // post
    public function add(CategoryRequest $request){
    	$cates = new Categories;
    	$cates->name = $request->txtName;
    	$cates->slug = $request->txtName;
    	$cates->parent_id = $request->parent;
    	$cates->keywords = $request->keywords;
    	$cates->save();
    	return redirect('admin/chuyen-muc/index')->with(['alert'=>'success','message_flag'=>'Thêm mới chuyên mục thành công']);
    }
    // get
    public function getEdit($id){
    	$data = Categories::findOrFail($id)->toArray();
    	// $cate = Categories::findOrFail($id)->toArray();/
    	return view('admin.category.edit',compact('data'));
    	print_r($cate);
    }

    public function postEdit($id){
    	echo $id;
    	// $data = Categories::findOrFail($id)->toArray();
    	// // $cate = Categories::findOrFail($id)->toArray();/
    	// return view('admin.category.edit',compact('data'));
    	// print_r($cate);
    }
    public function delete($id){
    	$cate = Categories::where('id',$id)->delete();
    	return redirect('admin/chuyen-muc/index')->with(['alert'=>'success','message_flag'=>'Đã xóa chuyên mục thành công']);
    }
}
