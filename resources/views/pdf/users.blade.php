<x-app-layout>
<x-employeeheader />
<head>	
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
	  .form-select{
		  display: block;
		  width:100%;
		  padding: .375rem 2.25rem .375rem .75rem;
		  font-size: 1rem;
		  font-weight: 400;
		  line-height: 1.5;
		  color: #212529;
		  background-color:#fff;
		 
}
   #showdate{
	  font-size: 14px;
	   
   }
   #showtime{
	   font-size: 14px;
   }
   #showorder{
	   font-size: 14px;
	    text-align: right;
   }
   #grosstotal{
	   color:green;
   }
	
  
     </style>

</head>
                      <!----Form for employee----->

  <div class="container">
		    <div class="row">
			<div class="col-sm-2">
			 </div>
			   <div class="col-sm-10">
			   <table class="table table-hover">
					 <thead>
                        <tr>
                            
                            <th scope="col">Category</th>
                            <th scope="col">Product</th>
							<th scope="col">Price</th>
                            <th scope="col">Qty</th>
							<th scope="col"> Add To Menu</th>
							<th scope="col"></th>
  
                        </tr>
						</thead>
						<form action="" method="POST" id="sform">
						@csrf
				       
						<td>
							<select class="form-select" id="category">
                             <option value="">Select a Catogory</option>
				                @foreach ($category as $item)
                                   <option value="{{  $item->id }}">{{ $item->name }}</option>
				               @endforeach
                           </select>
				         </td>
						 <td>
							<select class="form-select productname" id="product" name="productname">
							<option value="0">Select a Product</option>
							
							 </select>
				         </td>
						 <td>
							<select class="form-select " id="price" name="price">
							<option value="">Price</option>
							 </select>
                         </td>
						 <td>
						   <select class="form-select " id="qty" name="qty">
						   <option value="">Select a Quantity</option>
							<option value="0.5">Half</option>
							<option value="1">Full</option>
							 </select>
						 </td>
						<td>
						<button type="submit" class="btn btn-success" id="sbt"><a href="https://www.w3.org/"></a>Submit</button>
						
						</td>
						<td>
						<a class="btn btn-success" href="{{route('export_user_pdf')}}">Generate a Bill</a>
						</td>
						<td>
						@if(session()->has('status'))
				            <div class="alert alert-success mt-3">
				          {{session('status')}}
			                 </div>
		               @endif
						</td>
						
			   </form>			
			   </div>
			   </div>
			    </table>
				 <!----Receipt For client----->
				 
				  <h3 style="color:green;text-align:center"><b>Fun2Fun Resturant </b></h3>
				  <div class="container mr-5 mt-3">
		               <div class="row">
			             <div class="col-sm-10">
			                <div class="card">
				              <div class="card-body">
					              <h3 style="color:#EB984E;text-align:left"><b>Receipt </b></h3>
								  <div class="container">
								     <div class="row">
								       <div class="col-sm-6">
								          <b><p id="showtime"></p></b>
										  <b><p id="showdate"></p></b>
								       </div>
								       <div class="col-sm-6">
								           <b><p id="showorder">Order No:05334</p></b>
								        </div>
									  </div>	
								   </div>
							
		          <div class="table-responsiv">
					      <table class="table">
					         <thead>
					         <tbody>
                              <tr>
                                 <th scope="col">No.</th>
                                 <th scope="col">Product Name</th>
								 <th scope="col">Price</th>
                                 <th scope="col">Quantity</th>
							     <th scope="col">Total</th>
                             </tr>
						</thead>
						   <tr>
						       <td><div id="no">0</div></td>	
                               <td><div id="showproduct">Nil</div></td>
                               <td><div id="showprice">0</div></td>							   
						       <td><div id="showqty">0</div></td>	
							    <td><div id="showtotal">0</div></td>	
						 </tr>
						 <tr>
						  <td> <div id="1" ></div></td>
						  <td> <div id="1" ></div></td>
						  <td> <div id="1" ></div></td>
						  <td> <div id="1" ><b>Tax (12%): Rs</b></div></td>
						  <td> <div id="showtax" >0</div></td>
						 </tr>
						  <tr>
						  <td> <div id="" ></div></td>
						  <td> <div id="" ></div></td>
						  <td> <div id="" ></div></td>
						  <td> <div id="" ><b>Gross Total: Rs</b></div></td>
						  <td> <div id="grosstotal" >0</div></td>
						 </tr>
						 
                        </tbody>
	                  </table>
				   </div>
			    </div>
		     </div>
	       </div>
	       </div>
	   </div>
     </div>
				 
				 
			 
			
			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

			  <script type="text/javascript">
			  jQuery(document).ready(function(){
				  jQuery('#category').change(function(){
					  $('#no').html('1');
					  let cid=jQuery(this).val();
					  jQuery('#price').html('<option value="" disabled="true"></option>');
					  //alert(cid);
					  jQuery.ajax({
						  url:'/getproduct',
						  type:'post',
						  data:'cid='+cid+'&_token= {{csrf_token()}}',
						  success:function(result){
							  jQuery('#product').html(result)
						  }
						  
					  });
				  });
				  //choose product and get price
				  
				  jQuery('#product').change(function(){
					  let pid=jQuery(this).val();
					  $('#showproduct').html(pid);
					  //alert(cid);
					  jQuery.ajax({
						  url:'/getprice',
						  type:'post',
						  data:'pid='+pid+'&_token= {{csrf_token()}}',
						  success:function(result){
							  jQuery('#price').html(result)
							  jQuery('#showprice').html(result)
							  
							  
						  }
						  
					  });
				  });
				  
				
					   
					   $('#qty').change(function(){
						   var qty = $('#qty').val();
						   $('#showqty').html(qty);
						  var pri =  $('#price').val();
						   var total = qty * pri;
						   console.log(total);
						   $('#showtotal').html(total);
						   var tax = (total / 100 ) * 12;
						   $('#showtax').html(tax);
						   var grosstotal = total + tax;
						    $('#grosstotal').html(grosstotal);
						   
						   //if condition on qty selected box
						   
						   if($('#qty option:selected').text() == "Half")
                               $('#showqty').html('Half');
                           else 
							    $('#showqty').html('Full');
						   
						   
						   //end if
						});
				   //show data of form end
				   
				   //show time
				   
				    var dt = new Date();
                    var time = "Time: " + dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
                    // document.write(time);
					 console.log(time);
					 $('#showtime').html(time);
				   //end time
				   //show current date
				        var fullDate = new Date()
                        var twoDigitMonth = ((fullDate.getMonth().length+1) === 1)? (fullDate.getMonth()+1) : '0' + (fullDate.getMonth()+1);
                        var currentDate =  "Date: " + fullDate.getDate() + "/" + twoDigitMonth + "/" + fullDate.getFullYear();
                            console.log(currentDate);
							 $('#showdate').html(currentDate);
                          //19/05/2011
				   //end date
				    
                        });
			  </script>
		 



</x-app-layout>