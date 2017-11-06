<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('thuphap');
})->name('trangchu');
// Route::get('create-table','CreateDatabaseController@create');
Route::get('chuyen-muc/add',function(){
	return view('form/category/add');
});
// Route::post('chuyen-muc/add',['as'=>'addCategory','uses'=>'CategoriesController@add']);

Route::get('auth/login',['as'=>'getLogin','uses'=>'Auth\AuthController@getLogin']);
Route::post('auth/login',['as'=>'postLogin','uses'=>'Auth\AuthController@postLogin']);

// Route::get('auth/register',['as'=>'getRegister','uses'=>'Auth\AuthController@getRegister']);
// Route::post('auth/register',['as'=>'postRegister','uses'=>'Auth\AuthController@postRegister']);
Route::get('auth/logout',function(){
	Auth::logout();
	return redirect()->route('admin');
});
Auth::routes();
// Route::get('/admin',['as'=>'getLogin','uses'=>'Auth\AuthController@getLogin'])->middleware('checkUser');
Route::prefix('admin')->middleware('checkUser')->group(function () {
    Route::get('/', function () {
    	return view('admin/dashboard');
    })->name('admin');

	Route::prefix('chuyen-muc')->group(function () {
		Route::get('index','CategoriesController@index')->name('categoryList');

		Route::get('add',function(){ 			
			$cates = App\Categories::select('id','name','parent_id')->orderBy('order_by')->get()->toArray();
			return view('admin/category/add',compact('cates')); 
		})->name('addCate');

		Route::post('add',['as'=>'addCategory','uses'=>'CategoriesController@add']);

		Route::get('edit/{id}','CategoriesController@getEdit');
		Route::post('edit/{id}',['as'=>'postEdit','uses'=>'CategoriesController@postEdit']);

		Route::get('delete/{id}','CategoriesController@delete');
	});


	Route::prefix('product')->group(function(){
		Route::get('add',['as'=>'addProduct','uses'=>'ProductController@getAdd']);
		Route::post('add',['as'=>'postProduct','uses'=>'ProductController@postAdd']);
	});
});
Route::any('{all?}',function(){ return "URL không tồn tại";})->where('all','(.*)');
// Route::any('/{*}',function(){
// 	echo "Trang yêu cầu không tôn tại";
// });
// 
// Route::resource('restfull', 'RestFullController');//restFull