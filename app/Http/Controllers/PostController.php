<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    //
	public function index()
    {
        //
		$details= Post::all();
		return view('/post',['details'=>$details]);
    }
	public function store(Request $request)
	{
	  $pst = new Post;
	  $pst->title =$request->input('title');
	   $pst->description =$request->input('description');
	   if ($request->hasfile('Photo'))
		{
			$file = $request->file('Photo');
			$extention = $file->getClientOriginalName(); 
			$filename = time().'-'.$extention;
			$file->move('uploads/posts', $filename);
			$pst->Photo= $filename;
		}
		$pst->save();
		
		 return redirect(url('post'))->with('status','student added');
	}
	public function destroy2($id)
    {
        DB::table('posts') ->where('id', $id)->delete();
		return redirect(url('post'))->with('status','Record Deleted');
		
		
    }

}
