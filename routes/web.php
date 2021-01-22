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

Route::get('/', function () {
    return view('home');
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

Route::get('/news', function (){
	return view('news');
});

Route::get('/admin', 'App\Http\Controllers\AdminController@loginAdmin');
Route::post('/admin', 'App\Http\Controllers\AdminController@postLoginAdmin');
Route::get('/loginadmin', function (){
    return view('admin.home');
});

Route::get('/phimdangchieu', function (){
	return view('phimdangchieu');
});

Route::get('/chitietphim', function (){
    return view('chitietphim');
});

Route::get('/phimsapchieu', function (){
	return view('phimsapchieu');
});

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


