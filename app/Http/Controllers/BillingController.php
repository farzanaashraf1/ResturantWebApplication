<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Billing;
use PDF;

class BillingController extends Controller
{
    //
	
	public function getproduct(Request $request)
    {
        //
		 $cid=$request->post('cid');
		$product=DB::table('menus')->where('cat_id',$cid)->get();
		//print_r($product);
		$html='<option value="">Select Product</option>';
		
		foreach($product as $list){
			$html.='<option value="'. $list->name.'">'.$list->name.'</option>';
		}
        echo $html;		
    }
	
	
	 public function add()
    {
		$details= Category::all();
		return view('/billing',['category'=>$details]);
    }
	
	
	public function getprice(Request $request)
    {
        //
		 $pid=$request->post('pid');
		$product=DB::table('menus')->where('name',$pid)->get();
		// get productid
		$priceid=DB::table('menus')->where('id',$pid)->get();
		 $getid='';
		foreach($priceid as $list){
			$getid.='<input  value="'. $list->id.'">';
		}
		//echo $getid;
		///echo$getid;	
		
		//end productid
		//print_r($product);
		
		$html='';
		foreach($product as $list){
			$html.='<option value="'. $list->price.'">'.$list->price.'</option>';
		}
        echo $html;		
    }
	// send data form to receipt
	public function create(Request $request)
    {
		DB::table('billings')->insert([
		   'productname' => $request->productname,
		   'price' => $request->price,
		   'qty' => $request->qty,
		   'total' => $request->qty * $request->price,
		 
		 
		   ]);
		   return redirect('billing')->with('status','item added');
		   		
		   
    }
	 public function index()
    {
        //
		$showdata= Billing::all();
		return view('/billing',['showdata'=>$showdata]);
    }
     public function export_user_pdf()
    {
        //
		$pdf = PDF::loadView('pdf.users');
		return $pdf->download('users.pdf');
		
    }
    

	
}
