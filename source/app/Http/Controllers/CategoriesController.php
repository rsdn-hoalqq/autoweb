<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\EditCategoryRequest;
use App\Categories;
class CategoriesController extends Controller
{
    public function index(){
    	$categorys = Categories::select('id','name','keywords','order_by')->orderBy('order_by')->get()->toArray();
    	return view('admin.category.index',compact('categorys'));
    }
    // post
    public function add(CategoryRequest $request){
    	$cates = new Categories;
    	$cates->name = $request->txtName;
    	$cates->slug = $request->txtName;
        $cates->parent_id = $request->parent;
    	$cates->order_by = $request->order_by;
    	$cates->keywords = $request->keywords;
    	$cates->save();
    	return redirect('admin/chuyen-muc/index')->with(['alert'=>'success','message_flag'=>'Thêm mới chuyên mục thành công']);
    }
    // get
    public function getEdit($id){
        $cates = Categories::select('id','name','parent_id')->orderBy('order_by')->get()->toArray();
    	$data = Categories::findOrFail($id)->toArray();
    	return view('admin.category.edit',compact('data','cates'));
    }

    public function postEdit(EditCategoryRequest $request, $id){
    	$cates = Categories::find($id);
        $cates->name = $request->txtName;
        $cates->slug = $request->txtName;
        $cates->parent_id = $request->parent;
        $cates->order_by = $request->order_by;
        $cates->keywords = $request->keywords;
        $cates->save();
        return redirect('admin/chuyen-muc/index')->with(['alert'=>'success','message_flag'=>'Update chuyên mục thành công']);
    }
    public function delete($id){
    	$cate = Categories::where('id',$id)->delete();
    	return redirect('admin/chuyen-muc/index')->with(['alert'=>'success','message_flag'=>'Đã xóa chuyên mục thành công']);
    }
}
