<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;

class ReservationController extends Controller
{
    //
	public function viewreservation()
    {
        //
		$details= Reservation::all();
		return view('/verifybooking',['verify'=>$details]);
		
    }
	
	
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
		$id = Auth::id();
		$res-> user_id = $id;
		 $res->save();
		return redirect(url('onlinebooking'))->with('status','Your Request has been receieved please wait and visit Check Status page');
	}
	
	

	public function edit($id)
    {
        
		$student = DB::table('reservations')->find($id);
		return view('editverify', ['student'=>$student]);
    }
	
	
	
  public function update(Request $request, $id)
    {
        DB::table('reservations')->where('id',$id)->update([
		 'name' => $request->name,
		   'verify' => $request->verify,
		   
		]);
		 return redirect(url('/verifybooking'))->with('status','Record Updated');
    }

	
	
}
