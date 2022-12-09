<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class StaffController extends Controller
{
    //
	public function getstaffdetails()
    {
		$data = User::all()->where('role', 2);
		return view('staffpanel',['user'=>$data]);
		
	}

	public function destroy2($id)
    {
        DB::table('users') ->where('id', $id)->delete();
		return redirect(url('staffpanel'))->with('status','Record Deleted');
		
		
    }

}
