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
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->middleware('auth')->group(function(){
	Route::get('/', function () {return view('layouts/admin');})->name('admin');
	Route::post('/upload',['as'=>'upload','uses'=>'PostController@upload']);

	Route::prefix('chuyen-muc')->group(function () {
		Route::get('index','CategoriesController@index')->name('categoryList');

		Route::get('add',function(){ 			
			$cates = App\Category::select('id','name','parent_id')->orderBy('order_by')->get()->toArray();
			return view('admin/category/add',compact('cates')); 
		})->name('addCate');

		Route::post('add',['as'=>'addCategory','uses'=>'CategoriesController@add']);

		Route::get('edit/{id}','CategoriesController@getEdit');
		Route::post('edit/{id}',['as'=>'postEdit','uses'=>'CategoriesController@postEdit']);

		Route::get('delete/{id}','CategoriesController@delete');
		Route::post('delete/{id}',['as'=>'deleteProduct','uses'=>'Post@deleteImage']);
	});


	Route::prefix('post')->group(function(){
		Route::get('index',['as'=>'listProduct','uses'=>'PostController@index']);
		Route::get('add',['as'=>'addProduct','uses'=>'PostController@getAdd']);
		Route::post('add',['as'=>'postProduct','uses'=>'PostController@postAdd']);
		Route::get('edit/{id}','PostController@getEdit');
		Route::get('view/{id}',['as'=>'viewEdit','uses'=>'PostController@viewProduct']);
		Route::post('edit/{id}',['as'=>'editProduct','uses'=>'PostController@postEdit']);
		Route::post('delete/{id}',['as'=>'deleteProduct','uses'=>'PostController@deleteImage']);
	});
});