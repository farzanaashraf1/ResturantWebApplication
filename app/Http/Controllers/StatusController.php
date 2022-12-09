<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;

class StatusController extends Controller
{
    //
	
	public function viewreservation(){
		
	  $details= Reservation::all()->where('user_id',Auth::id());
	  return view('/checkstatus',['reservation'=>$details]);
	
    }
}
