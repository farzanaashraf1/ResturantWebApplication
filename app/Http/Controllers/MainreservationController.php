<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;

class MainreservationController extends Controller
{
    //
	public function index(Request $request)
	{
	  $res = new Reservation;
	  $res->name =$request->input('name');
	   $res->email =$request->input('email');
	    $res->phone =$request->input('phone');
		$res->guest =$request->input('guest');
		$res->date =$request->input('date');
		$res->time =$request->input('time');
		$res->message =$request->input('message');
		;
		$res->save();
		return redirect(url('Reservation'))->with('status','Your Request has been receieved ,Please Login for Conformation');
		
	}
	
}
