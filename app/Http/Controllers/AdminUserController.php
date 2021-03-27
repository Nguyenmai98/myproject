<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use DB;
use App\Components\Recusive;
use Illuminate\Support\Str;

class AdminUserController extends Controller
{
	private $user;
	public function __construct(User $user){
		$this->user = $user;
	}
    public function index(){
    	$users = $this->user->paginate(20);
    	return view('admin.user.index', compact('users'));
    }

    public function create(){
    	return view('admin.user.add');
    }

    public function store(Request $request){
    	$this->user->create([
    		'name' => $request->name,
    		'email' => $request->email,
    		'password' => Hash::make($request->password)
    		]);
    		return redirect()->route('users.index');
    
    }

    public function edit($id){
    	$user = $this->user->find($id);
    	return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $id){
    	$this->user->find($id)->update([
    		'name' => $request->name,
    		'email' => $request->email,
    		'password' => Hash::make($request->password)
    		]);
    		return redirect()->route('users.index');
    	
    }

    public function delete($id){
    	$this->user->find($id)->delete();
    	return redirect()-> route('users.index');
    }
}
