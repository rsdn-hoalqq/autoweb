<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Categories;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $cates = Categories::all()->toArray();
        $catesList = DB::table('categories')->select('id','name','slug','parent_id')->where('parent_id',0)->get()->toArray();
        $cates = $catesList;
        foreach ($catesList as $key => $value) {
            // get submenu
            $condition = $value->id;
            $sub = Categories::first()->select('id','name','slug','parent_id')->where('parent_id',$condition)->get()->toArray();
            // dd($sub);
            // if(!empty($sub)){
            //     $cates[$key]['sub'] = 'adsads';
            // }
        }
        
        return view('front/home',compact('cates'));
    }

    function getImport(Request $request){
        return view('front/import');
    }

    function postImport(Request $request){
        
    }
}
