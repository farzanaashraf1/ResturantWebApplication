<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class MainpostController extends Controller
{
    //
	public function index()
    {
        //
		$details= Post::paginate(2);
		return view('/blog',['details'=>$details]);
    }
}
