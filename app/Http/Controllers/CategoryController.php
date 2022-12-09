<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoryController extends Controller
{
    //
	 public function store(Request $request)
	{
	  $category = new Category;
	  $category->name =$request->input('name');
	  	$category->save();
		
		 return redirect(url('category'))->with('status','category added');
	}
	public function index()
    {
		$details= Category::all();
		return view('/category',['details'=>$details]);
    }
	public function destroy($id)
    {
        DB::table('categories')->where('id', $id)->delete();
		return redirect(url('category'))->with('status','Record Deleted');
		
		
    }

	
}
