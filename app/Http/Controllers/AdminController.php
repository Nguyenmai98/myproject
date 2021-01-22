<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\SessionGuard;

class AdminController extends Controller
{
    public function loginAdmin(){
    	return view('login');
    }

    public function postLoginAdmin(Request $request){
    	if(Auth::attempt([
    		'email' => $request->email,
    		'password' => $request->password
    	])){
    		return view('admin.home');
    	}
    }
}
