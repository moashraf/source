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
Route::post('form','WebsiteController@form')->name('form');

Route::get('/', 'WebsiteController@index')->name("home");
Route::get('/ar', 'WebsiteController@ar')->name("ar");
Route::get('/en', 'WebsiteController@en')->name("en");

Route::get('category/{id}','WebsiteController@showCategory')->name('category');
Route::get('/product/{id}','WebsiteController@showProduct')->name('product');
Route::get('/contact/index','WebsiteController@contact')->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index');



Route::group(['middleware' => 'auth'], function ()
{


Route::get('admin/banners', ['as'=> 'admin.banners.index', 'uses' => 'Admin\BannerController@index']);
Route::post('admin/banners', ['as'=> 'admin.banners.store', 'uses' => 'Admin\BannerController@store']);
Route::get('admin/banners/create', ['as'=> 'admin.banners.create', 'uses' => 'Admin\BannerController@create']);
Route::put('admin/banners/{banners}', ['as'=> 'admin.banners.update', 'uses' => 'Admin\BannerController@update']);
Route::patch('admin/banners/{banners}', ['as'=> 'admin.banners.update', 'uses' => 'Admin\BannerController@update']);
Route::delete('admin/banners/{banners}', ['as'=> 'admin.banners.destroy', 'uses' => 'Admin\BannerController@destroy']);
Route::get('admin/banners/{banners}', ['as'=> 'admin.banners.show', 'uses' => 'Admin\BannerController@show']);
Route::get('admin/banners/{banners}/edit', ['as'=> 'admin.banners.edit', 'uses' => 'Admin\BannerController@edit']);


Route::get('admin/categories', ['as'=> 'admin.categories.index', 'uses' => 'Admin\CategoryController@index']);
Route::post('admin/categories', ['as'=> 'admin.categories.store', 'uses' => 'Admin\CategoryController@store']);
Route::get('admin/categories/create', ['as'=> 'admin.categories.create', 'uses' => 'Admin\CategoryController@create']);
Route::put('admin/categories/{categories}', ['as'=> 'admin.categories.update', 'uses' => 'Admin\CategoryController@update']);
Route::patch('admin/categories/{categories}', ['as'=> 'admin.categories.update', 'uses' => 'Admin\CategoryController@update']);
Route::delete('admin/categories/{categories}', ['as'=> 'admin.categories.destroy', 'uses' => 'Admin\CategoryController@destroy']);
Route::get('admin/categories/{categories}', ['as'=> 'admin.categories.show', 'uses' => 'Admin\CategoryController@show']);
Route::get('admin/categories/{categories}/edit', ['as'=> 'admin.categories.edit', 'uses' => 'Admin\CategoryController@edit']);


Route::get('admin/products', ['as'=> 'admin.products.index', 'uses' => 'Admin\ProductController@index']);
Route::post('admin/products', ['as'=> 'admin.products.store', 'uses' => 'Admin\ProductController@store']);
Route::get('admin/products/create', ['as'=> 'admin.products.create', 'uses' => 'Admin\ProductController@create']);
Route::put('admin/products/{products}', ['as'=> 'admin.products.update', 'uses' => 'Admin\ProductController@update']);
Route::patch('admin/products/{products}', ['as'=> 'admin.products.update', 'uses' => 'Admin\ProductController@update']);
Route::delete('admin/products/{products}', ['as'=> 'admin.products.destroy', 'uses' => 'Admin\ProductController@destroy']);
Route::get('admin/products/{products}', ['as'=> 'admin.products.show', 'uses' => 'Admin\ProductController@show']);
Route::get('admin/products/{products}/edit', ['as'=> 'admin.products.edit', 'uses' => 'Admin\ProductController@edit']);

});
