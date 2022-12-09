<x-app-layout>
<x-userheader />


<div class="container mr-5">
		    <div class="row">
		<div class="col-md-12">
			     <div class="card">
				    
					<div class="card-body">
					   <h3 style="color:#EB984E;text-align:center"><b>Check Your Booking Status Here</b></h3>
					   <br/>
					   <br/>
		
			          <div class="table-responsiv">
					  
			        <table class="table">
					 <thead>
					 <tbody>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">PhoneNumber</th>
							<th scope="col">total guest</th>
							<th scope="col">Date</th>
							<th scope="col">Time</th>
							<th scope="col">Message</th>
							<th scope="col">Action</th>
							
							
  
                        </tr>
						@foreach($reservation as $rev)
					<tr>
                          <td>{{$loop->iteration}}</td>
						   <td>{{$rev->name}}</td>
                           <td>{{$rev->email}}</td>
	                       <td>{{$rev->phone}}</td>
						   <td>{{$rev->guest}}</td>
						   <td>{{$rev->date}}</td>
						   <td>{{$rev->time}}</td>
						   <td>{{$rev->message}}</td>
						   <td>{{$rev->verify}}</td>

						 
					</tr>
	                  @endforeach
						</thead>
						
                   
</div>

                        </tbody>
	                  </table>
				   </div>
			    </div>
		     </div>
	       </div>
	   </div>
     </div>
	 





</x-app-layout>