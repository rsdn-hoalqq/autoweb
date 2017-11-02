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
    return view('admin');
})->name('trangchu');
Route::get('create-table','CreateDatabaseController@create');
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
	return redirect('/');
});
Route::prefix('admin')->middleware('checkUser')->group(function () {
	Route::prefix('chuyen-muc')->group(function () {
		Route::get('index','CategoriesController@index');

		Route::get('add',function(){ return view('admin/category/add'); });
		Route::post('add',['as'=>'addCategory','uses'=>'CategoriesController@add']);

		Route::get('edit/{id}','CategoriesController@getEdit');
		Route::post('edit/{id}',['as'=>'postEdit','uses'=>'CategoriesController@postEdit']);

		Route::get('delete/{id}','CategoriesController@delete');
		// Route::get('/edit/{$id}',function(){
	 //    	// url: admin/chuyen-muc/add
		// 	return view('form/category/add');
		// });
		// Route::get('/delete/{$id}',function(){
	 //    	// url: admin/chuyen-muc/add
		// 	return view('form/category/add');
		// });
	});
});