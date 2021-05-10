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

Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/loginadmin', function () {
    return view('admin.home');
});

Route::prefix('categories')->group(function () {
    Route::get('/', [
    	'as' => 'categories.index',
    	'uses' => 'App\Http\Controllers\CategoryController@index'
    ]);
    Route::get('/create', [
    	'as' => 'categories.create',
    	'uses' => 'App\Http\Controllers\CategoryController@create'
    ]);
    Route::post('/store', [
    	'as' => 'categories.store',
    	'uses' => 'App\Http\Controllers\CategoryController@store'
    ]);
    Route::get('/edit/{id}', [
    	'as' => 'categories.edit',
    	'uses' => 'App\Http\Controllers\CategoryController@edit'
    ]);
    Route::post('/update/{id}', [
    	'as' => 'categories.update',
    	'uses' => 'App\Http\Controllers\CategoryController@update'
    ]);
    Route::get('/delete/{id}', [
    	'as' => 'categories.delete',
    	'uses' => 'App\Http\Controllers\CategoryController@delete'
    ]);
    
});

Route::prefix('products')->group(function () {
    Route::get('/', [
        'as' => 'products.index',
        'uses' => 'App\Http\Controllers\AdminProductController@index'
    ]);
    Route::get('/create', [
        'as' => 'products.create',
        'uses' => 'App\Http\Controllers\AdminProductController@create'
    ]);
    Route::post('/store', [
        'as' => 'products.store',
        'uses' => 'App\Http\Controllers\AdminProductController@store'
    ]);
    Route::get('/edit/{id}', [
        'as' => 'products.edit',
        'uses' => 'App\Http\Controllers\AdminProductController@edit'
    ]);
    Route::post('/update/{id}', [
        'as' => 'products.update',
        'uses' => 'App\Http\Controllers\AdminProductController@update'
    ]);
    Route::get('/delete/{id}', [
        'as' => 'products.delete',
        'uses' => 'App\Http\Controllers\AdminProductController@delete'
    ]);
    
});
Route::prefix('users')->group(function () {
    Route::get('/', [
        'as' => 'users.index',
        'uses' => 'App\Http\Controllers\AdminUserController@index'
    ]);

    Route::get('/create', [
        'as' => 'users.create',
        'uses' => 'App\Http\Controllers\AdminUserController@create'
    ]);

    Route::post('/store', [
        'as' => 'users.store',
        'uses' => 'App\Http\Controllers\AdminUserController@store'
    ]);

    Route::get('/edit/{id}', [
        'as' => 'users.edit',
        'uses' => 'App\Http\Controllers\AdminUserController@edit'
    ]);

    Route::post('/update/{id}', [
        'as' => 'users.update',
        'uses' => 'App\Http\Controllers\AdminUserController@update'
    ]);

    Route::get('/delete/{id}', [
        'as' => 'users.delete',
        'uses' => 'App\Http\Controllers\AdminUserController@delete'
    ]);
 
});
Route::prefix('sliders')->group(function () {
    Route::get('/', [
        'as' => 'sliders.index',
        'uses' => 'App\Http\Controllers\SliderController@index'
    ]);

    Route::get('/create', [
        'as' => 'sliders.create',
        'uses' => 'App\Http\Controllers\SliderController@create'
    ]);

    Route::post('/store', [
        'as' => 'sliders.store',
        'uses' => 'App\Http\Controllers\SliderController@store'
    ]);

    Route::get('/edit/{id}', [
        'as' => 'sliders.edit',
        'uses' => 'App\Http\Controllers\SliderController@edit'
    ]);

    Route::post('/update/{id}', [
        'as' => 'sliders.update',
        'uses' => 'App\Http\Controllers\SliderController@update'
    ]);

    Route::get('/delete/{id}', [
        'as' => 'sliders.delete',
        'uses' => 'App\Http\Controllers\SliderController@delete'
    ]);
 
});

Route::prefix('servers')->group(function () {
    Route::get('/', [
        'as' => 'servers.index',
        'uses' => 'App\Http\Controllers\ServerController@index'
    ]);

    Route::get('/create', [
        'as' => 'servers.create',
        'uses' => 'App\Http\Controllers\ServerController@create'
    ]);

    Route::post('/store', [
        'as' => 'servers.store',
        'uses' => 'App\Http\Controllers\ServerController@store'
    ]);

    Route::get('/edit/{id}', [
        'as' => 'servers.edit',
        'uses' => 'App\Http\Controllers\ServerController@edit'
    ]);

    Route::post('/update/{id}', [
        'as' => 'servers.update',
        'uses' => 'App\Http\Controllers\ServerController@update'
    ]);

    Route::get('/delete/{id}', [
        'as' => 'servers.delete',
        'uses' => 'App\Http\Controllers\ServerController@delete'
    ]);
 
});

Route::prefix('phongchieus')->group(function () {
    Route::get('/', [
        'as' => 'phongchieus.index',
        'uses' => 'App\Http\Controllers\PhongChieuController@index'
    ]);

    Route::get('/create', [
        'as' => 'phongchieus.create',
        'uses' => 'App\Http\Controllers\PhongChieuController@create'
    ]);

    Route::post('/store', [
        'as' => 'phongchieus.store',
        'uses' => 'App\Http\Controllers\PhongChieuController@store'
    ]);

    Route::get('/edit/{id}', [
        'as' => 'phongchieus.edit',
        'uses' => 'App\Http\Controllers\PhongChieuController@edit'
    ]);

    Route::post('/update/{id}', [
        'as' => 'phongchieus.update',
        'uses' => 'App\Http\Controllers\PhongChieuController@update'
    ]);

    Route::get('/delete/{id}', [
        'as' => 'phongchieus.delete',
        'uses' => 'App\Http\Controllers\PhongChieuController@delete'
    ]);
 
});

Route::prefix('khoangtgs')->group(function () {
    Route::get('/', [
        'as' => 'khoangtgs.index',
        'uses' => 'App\Http\Controllers\KhoangTGController@index'
    ]);

    Route::get('/create', [
        'as' => 'khoangtgs.create',
        'uses' => 'App\Http\Controllers\KhoangTGController@create'
    ]);

    Route::post('/store', [
        'as' => 'khoangtgs.store',
        'uses' => 'App\Http\Controllers\KhoangTGController@store'
    ]);

    Route::get('/edit/{id}', [
        'as' => 'khoangtgs.edit',
        'uses' => 'App\Http\Controllers\KhoangTGController@edit'
    ]);

    Route::post('/update/{id}', [
        'as' => 'khoangtgs.update',
        'uses' => 'App\Http\Controllers\KhoangTGController@update'
    ]);

    Route::get('/delete/{id}', [
        'as' => 'khoangtgs.delete',
        'uses' => 'App\Http\Controllers\KhoangTGController@delete'
    ]);
 
});

Route::prefix('trangthais')->group(function () {
    Route::get('/', [
        'as' => 'trangthais.index',
        'uses' => 'App\Http\Controllers\TrangThaiController@index'
    ]);

    Route::get('/create', [
        'as' => 'trangthais.create',
        'uses' => 'App\Http\Controllers\TrangThaiController@create'
    ]);

    Route::post('/store', [
        'as' => 'trangthais.store',
        'uses' => 'App\Http\Controllers\TrangThaiController@store'
    ]);

    Route::get('/edit/{id}', [
        'as' => 'trangthais.edit',
        'uses' => 'App\Http\Controllers\TrangThaiController@edit'
    ]);

    Route::post('/update/{id}', [
        'as' => 'trangthais.update',
        'uses' => 'App\Http\Controllers\TrangThaiController@update'
    ]);

    Route::get('/delete/{id}', [
        'as' => 'trangthais.delete',
        'uses' => 'App\Http\Controllers\TrangThaiController@delete'
    ]);
 
});

Route::prefix('loaighes')->group(function () {
    Route::get('/', [
        'as' => 'loaighes.index',
        'uses' => 'App\Http\Controllers\LoaiGheController@index'
    ]);

    Route::get('/create', [
        'as' => 'loaighes.create',
        'uses' => 'App\Http\Controllers\LoaiGheController@create'
    ]);

    Route::post('/store', [
        'as' => 'loaighes.store',
        'uses' => 'App\Http\Controllers\LoaiGheController@store'
    ]);

    Route::get('/edit/{id}', [
        'as' => 'loaighes.edit',
        'uses' => 'App\Http\Controllers\LoaiGheController@edit'
    ]);

    Route::post('/update/{id}', [
        'as' => 'loaighes.update',
        'uses' => 'App\Http\Controllers\LoaiGheController@update'
    ]);

    Route::get('/delete/{id}', [
        'as' => 'loaighes.delete',
        'uses' => 'App\Http\Controllers\LoaiGheController@delete'
    ]);
 
});
Route::get('/news', 'App\Http\Controllers\HomeController@tinTuc');
Route::get('/chitietdichvu/{id}', [
    'as' => 'chitietdichvu',
    'uses' => 'App\Http\Controllers\HomeController@chiTietTin'
]);

Route::get('/admin', 'App\Http\Controllers\AdminController@loginAdmin');
Route::post('/admin', 'App\Http\Controllers\AdminController@postLoginAdmin');

Route::get('/loaiphim/{type}', [
    'as' => 'loaiphim',
    'uses' => 'App\Http\Controllers\HomeController@loaiPhim'
]);

Route::get('/chitietphim/{id}', [
    'as' => 'chitietphim',
    'uses' => 'App\Http\Controllers\HomeController@productsDetail'
]);

Route::get('/quayonline', function (){
	return view('quayonline');
});

Route::get('/e-cgv', function (){
	return view('e-cgv');
});

Route::get('/gift-card', function (){
	return view('gift-card');
});

Route::get('/menu', function (){
	return view('menu');
});

Route::get('/groupsale', function (){
	return view('groupsale');
});

Route::get('/muave', function (){
    return view('muave');
});

Route::get('/quyenloi', function (){
    return view('quyenloi');
});

Route::get('/lichchieu', function (){
    return view('lichchieu');
});

Route::get('/vecuatoi', function (){
    return view('vecuatoi');
});

Route::get('/giave', function (){
    return view('giave');
});

Route::get('/datve', function (){
    return view('datve');
});

Route::get('/thanhtoan', function (){
    return view('thanhtoan');
});

Route::get('/chitietdichvu', function (){
    return view('chitietdichvu');
});

