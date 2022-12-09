<x-header1 />
 <br><br>
 <title>F2F - Restaurant</title>


<div class="container">
		    <div class="row">
			   <div class="col-md-12">
			     <div class="card">
				    
					<div class="card-body">
					  <h2 style="color:green;text-align:center"><b>Current News </b></h2>
					   <br/>
					
			          <div class="table-responsiv">
					  
			        <table class="table">
					 <thead>
					 <tbody>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
							<th scope="col">Photo</th>
							
                        </tr>
						</thead>
  

                    @foreach($details as $men)
                       <tr>

                           <td>{{$men->id}}</th>
                           <td>{{$men->title}}</th>
						   <td>{{$men->description}} <a style="color:#D17008;font-weight:bold;" href="#">Read More</a></th>
						   <td>
	                          <img src="{{ asset('uploads/posts/'.$men->Photo) }}" style="height: 100px; width: 150px;">
							</td>
						   	 
	                     </tr>
	                  @endforeach
                        </tbody>
	                  </table>
					  
					 
					  <div style="color:green;text-align:center">
					  {{ $details->links() }}
					  </div>
					  <style>
					    .w-5{
							display:none;
						}
						 
					  </style>
					  
					   
				   </div>
			    </div>
		     </div>
	       </div>
	   </div>
     </div>
<br><br>
  <br><br>
<x-footer />