<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;
use App\Models\Category;

class MenuController extends Controller
{
    
    public function index()
    {
        //
		$details= Menu::all();
		return view('/menupanel',['details'=>$details]);
    }

     public function create(Request $request)
    {

		
    }
	

    
    public function store(Request $request)
	{
	  $menu = new Menu;
	  $menu->name =$request->input('name');
	   $menu->cat_id =$request->input('cat_id');
	    $menu->description =$request->input('description');
		$menu->price =$request->input('price');
		if ($request->hasfile('Photo'))
		{
			$file = $request->file('Photo');
			$extention = $file->getClientOriginalName(); 
			$filename = time().'-'.$extention;
			$file->move('uploads/menus', $filename);
			$menu->Photo= $filename;
		}
		$menu->save();
		
		 return redirect(url('menupanel'))->with('status','menu added');
	}
	
		public function destroy2($id)
    {
        DB::table('menus') ->where('id', $id)->delete();
		return redirect(url('menupanel'))->with('status','Record Deleted');
		
		
    }

    
    public function add()
    {
		$details= Category::all();
		return view('/create',['category'=>$details]);
    }
	
  
    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
 
}
