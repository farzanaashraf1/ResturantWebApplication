<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;

class UsermenuController extends Controller
{
    //
	public function index()
    {
        //
		$details= Menu::all();
		return view('/usermenu',['details'=>$details]);
    }

}
