<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    // 
	
	
	
	
	public function index(){
		
		
		$role=Auth::user()->role;
		if($role=='1')
		{
			return view('admin');
		}
		if($role=='2')
		{
			return view('employee');
		}
		else{
			 
			 $events = Auth()->user()->events;
             return view('dashboard')->with('events', $events);


			//return view('dashboard');
			
		}
	}
	
	public function addemployee(Request $req){
		
		$data=new user;
		$data->name=$req->name;
		$data->email=$req->email;
		$data->password=bcrypt($req->password);
		$data->role='2';
		$data->save();
		return redirect()->back();
		
	}
	

}
