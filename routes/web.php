<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UsermenuController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\UserpostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\MainpostController;
use App\Http\Controllers\MainreservationController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//----Menupannel

Route::view('/menupanel','menupanel');
Route::view('/create','create');
Route::get('menupanel',[MenuController::class,'index']);
Route::post('create',[MenuController::class,'store']);
Route::get('create',[MenuController::class,'add']);
Route::get('/delete_menu/{id}',[MenuController::class,'destroy2']);



      // Reservation for main page 
    Route::view('/Reservation','Reservation');
	Route::post('/Reservation',[MainreservationController::class,'index']);
	
	
	 
   Route::view('/about','about');
   
   // blog for main page
  Route::view('/blog','blog');
  Route::get('/blog',[MainpostController::class,'index']);	
  
  
  
  
  Route::view('/contact','contact');
  Route::view('/menu','menu');
 
  
    // ---- admin routes---
  
  Route::view('/adminhome','adminhome');
  
  
  
  
  Route::view('/addemployee','addemployee');
  
  
  
  
 
 Route::get('redirects',[HomeController::class,'index']);
 Route::post('/addemployee',[HomeController::class,'addemployee']);
 
 
 
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[HomeController::class,'index'])->name('dashboard');
});

   //----User Table
   Route::view('/userdetails','userdetails');
Route::get('/userdetails',[AdminController::class,'getuserdetails']);
Route::get('/delete_user/{id}',[AdminController::class,'destroy']);


//----Staff panel

Route::view('/staffpanel','staffpanel');
Route::get('staffpanel',[StaffController::class,'getstaffdetails']);
Route::get('/delete_staff/{id}',[StaffController::class,'destroy2']);




//----Categor

Route::view('/category','category');
Route::get('category',[CategoryController::class,'index']);
Route::post('category',[CategoryController::class,'store']);
Route::get('/delete_category/{id}',[CategoryController::class,'destroy']);


          //Billing Panel
Route::view('/export_user_pdf','/export_user_pdf');	  
Route::get('/export_user_pdf',[BillingController::class,'export_user_pdf'])->name('export_user_pdf');


Route::view('/billing','billing');
Route::get('billing',[BillingController::class,'add']);
Route::post('/getproduct',[BillingController::class,'getproduct']);
Route::post('/getprice',[BillingController::class,'getprice']);
Route::post('billing',[BillingController::class,'create']);
Route::get('billing',[BillingController::class,'add']);

//Route::get('billing',[BillingController::class,'index']);
//Route::get('billing',[BillingController::class,'billshow']);




//----PostadminPannel
 Route::view('/post','post');
Route::view('/createpost','createpost');
Route::get('post',[PostController::class,'index']);
Route::post('createpost',[PostController::class,'store']);
Route::get('/delete_Post/{id}',[PostController::class,'destroy2']);

                                //----UserPannel
								
		       //------menu view to users
 Route::view('/usermenu','usermenu');
Route::get('usermenu',[UsermenuController::class,'index']); 

					//------posts
Route::view('/viewposts','viewposts');	
Route::get('/viewposts',[UserpostController::class,'index']);				
					




 
                   //----Reservation in users pannels

Route::view('/onlinebooking','onlinebooking');
Route::post('/onlinebooking',[ReservationController::class,'index']);





                               //----EmployeePannel
							   


                              //----Verifybooking
Route::view('/editverify','editverify');							  
Route::view('/verifybooking','verifybooking');
Route::get('verifybooking',[ReservationController::class,'viewreservation']);	
Route::get('/edit/{id}',[ReservationController::class,'edit'])->name('edit');
Route::put('/edit/{id}',[ReservationController::class,'update'])->name('update');


//----show booking response to user

Route::view('/checkstatus','checkstatus');
Route::get('checkstatus',[StatusController::class,'viewreservation']);



Route::view('/employeepost','employeepost');
Route::get('employeepost',[EmployeeController::class,'index']);


// middleware practie


Route::view('/noaccess','noaccess');
Route::view('/checkage','checkage');

Route::group(['middleware'=>['protectedpage']],function(){
	Route::view('/dumy','dumy');
});





