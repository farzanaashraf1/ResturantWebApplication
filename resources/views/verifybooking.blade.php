<x-app-layout>
<x-employeeheader />

<div class="container mr-5">
		    <div class="row">
			   <div class="col-sm-12">
			     <div class="card">
				    
					<div class="card-body">
					   <h3 style="color:#EB984E;text-align:center"><b>Verify Reservation</b></h3>
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
                            <th scope="col">Phone</th>
							<th scope="col">Guest</th>
							<th scope="col">Date</th>
							<th scope="col">Time</th>
							<th scope="col">Message</th>
							<th scope="col">Verfication</th>
							<th scope="col">Action</th>
                          </tr>
						</thead>
                @foreach($verify as $var)
					<tr>
                          <td>{{$loop->iteration}}</td>
						   <td>{{$var->name}}</td>
                           <td>{{$var->email}}</td>
	                       <td>{{$var->phone}}</td>
						   <td>{{$var->guest}}</td>
						   <td>{{$var->date}}</td>
						   <td>{{$var->time}}</td>
						   <td>{{$var->message}}</td>
						   <td>{{$var->verify}}</td>
						   <td>
	                           <a href="{{ url('/edit',$var->id) }}" class="btn btn-success btn-sm" >Verify</a>
	                       </td>
							
					</tr>
	                  @endforeach
                        </tbody>
	                  </table>
				   </div>
			    </div>
		     </div>
	       </div>
	   </div>
     </div>
	 




</x-app-layout>