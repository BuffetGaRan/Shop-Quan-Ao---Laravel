<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'remoteController@getMaster')->name('/');
Route::post('change-image', 'changeImageController@ChangeImage')->name('ChangeImage');

Route::group(['prefix' => 'admin'], function(){

	// Route::group(['prefix' => 'gender'], function(){
	// 	Route::get('addNew', 'genderController@getAdd');
	// 	Route::post('addNew', 'genderController@postAdd');
	// });

	// Route::group(['prefix' => 'product_category'], function(){
	// 	Route::get('addNew', 'product_categoryController@getAdd');
	// 	Route::post('addNew', 'product_categoryController@postAdd');
	// });

	// Route::group(['prefix' => 'product'], function(){
	// 	Route::get('getList', 'productController@getList');
	// 	Route::get('getListMale', 'productController@getListMale');
	// 	Route::get('getListFemale', 'productController@getListFemale');
	// 	Route::get('addNew', 'productController@getAdd');
	// 	Route::post('addNew', 'productController@postAdd');
	// });

	Route::get('/', 'adminController@View')->middleware('auth-system')->name('admin');
	Route::get('ship/{id}', 'adminController@ship')->name('ship');

	Route::post('add-product', 'adminController@postAdd');
	Route::post('update-product', 'adminController@postUpdate');
	Route::post('delete-product', 'adminController@postDelete');
	Route::post('search-product/name', 'ajaxController@Search')->name('adminSearch');
});


// Route::group(['prefix' => 'user'], function(){

// 	Route::get('login', 'userController@getLogin');

// 	Route::get('register', 'userController@getRegister');
	
// });

Route::group(['prefix' => 'product'], function(){
	Route::get('/', 'remoteController@getProduct')->name('product');
	Route::get('detail/{id}', 'remoteController@getDetail');
});

Route::group(['prefix' => 'ajax'], function(){
	Route::post('filter-product', 'ajaxController@FilterProduct')->name('FilterProduct');
	Route::post('paginate-product', 'ajaxController@GetProduct')->name('PaginateProduct');
	Route::post('add-cart', 'ajaxController@AddCart')->name('AddCart');
	Route::post('remove-cart', 'ajaxController@RemoveCart')->name('RemoveCart');
	Route::post('login', 'userController@postLogin')->name('Login');
	Route::post('register', 'userController@postRegister')->name('Register');
	Route::post('logout', 'userController@postLogout')->name('Logout');
});

Route::group(['prefix' => 'pay'], function(){
	Route::get('/', function(){
		return view('Frontend.Layouts.pay');
	})->name('pay');
	Route::get('adddata', 'payController@addData')->name('AddData');
	Route::post('adddata2', 'payController@addData2');
});



