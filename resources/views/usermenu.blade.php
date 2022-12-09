<x-app-layout>
<x-userheader />

<div class="container mr-5">
		    <div class="row">
			   <div class="col-md-9">
			     <div class="card">
				    
					<div class="card-body">
					   <h3 style="color:#EB984E;text-align:center"><b>Menu </b></h3>
					   <br/>
					   <br/>
		
			          <div class="table-responsiv">
					  
			        <table class="table">
					 <thead>
					 <tbody>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Description</th>
							<th scope="col">Price</th>
							<th scope="col">Photo</th>
							
  
                        </tr>
						</thead>
  

                    @foreach($details as $men)
                       <tr>

                           <td>{{$loop->iteration}}</th>
                           <td>{{$men->name}}</th>
	                       <td>{{$men->category}}</th>
						   <td>{{$men->description}}</th>
						   <td>{{$men->price}}</th>
	                        <td>
	                          
							<img src="{{ asset('uploads/menus/'.$men->Photo) }}" style="height: 100px; width: 150px;">
							   
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