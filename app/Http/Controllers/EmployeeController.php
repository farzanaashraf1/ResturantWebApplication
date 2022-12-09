<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class EmployeeController extends Controller
{
    //
		public function index()
    {
        //
		$details= Post::all();
		return view('/employeepost',['details'=>$details]);
    }
}
