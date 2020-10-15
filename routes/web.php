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

Route::get('/news', function (){
	return view('news');
});

Route::get('/login', function (){
	return view('login');
});

Route::get('/phimdangchieu', function (){
	return view('phimdangchieu');
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


