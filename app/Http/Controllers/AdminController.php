<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AdminController extends Controller
{
    //
	public function getuserdetails()
    {
		
		$details= User::all() ->where('role', 0);
		return view('userdetails',['user'=>$details]);
	}

	public function destroy($id)
    {
        DB::table('users') ->where('id', $id)->delete();
		return redirect(url('userdetails'))->with('status','Record Deleted');
		
		
    }
	

	
 
}

