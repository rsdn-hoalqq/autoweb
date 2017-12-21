<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\EditCategoryRequest;
use App\Category;
class CategoriesController extends Controller
{
    public function index(){
    	$categorys = Category::select('id','name','order_by','slug')->orderBy('order_by')->get()->toArray();
    	return view('admin.category.index',compact('categorys'));
    }
    // post
    public function add(CategoryRequest $request){
    	$cates = new Category;
    	$cates->name = $request->txtName;
        $cates->parent_id = $request->parent;
    	$cates->order_by = $request->order_by;
        $cates->published = $request->published;
    	$cates->slug = $this->to_slug($request->txtName);
    	$cates->save();
    	return redirect('admin/chuyen-muc/add')->with(['alert'=>'success','message_flag'=>'Thêm mới chuyên mục thành công']);
    }
    // get
    public function getEdit($id){
        $cates = Category::select('id','name','parent_id','slug')->orderBy('order_by')->get()->toArray();
    	$data = Category::findOrFail($id)->toArray();
    	return view('admin.category.edit',compact('data','cates'));
    }

    public function postEdit(EditCategoryRequest $request, $id){
    	$cates = Category::find($id);
        $cates->name = $request->txtName;
        $cates->parent_id = $request->parent;
    	$cates->order_by = $request->order_by;
    	$cates->published = $request->published;
        $cates->slug = $this->to_slug($request->txtName);
        $cates->save();
        return redirect('admin/chuyen-muc/index')->with(['alert'=>'success','message_flag'=>'Update chuyên mục thành công']);
    }
    public function delete($id){
    	$cate = Category::where('id',$id)->delete();
    	return redirect('admin/chuyen-muc/index')->with(['alert'=>'success','message_flag'=>'Đã xóa chuyên mục thành công']);
    }
}