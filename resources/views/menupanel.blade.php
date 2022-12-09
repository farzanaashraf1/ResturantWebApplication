<x-app-layout>
<x-admin-header />

         <div class="container mr-5">
		    <div class="row">
			   <div class="col-md-9">
			     <div class="card">
				    <div class="card-header">Menu</div>
					<div class="card-body">
					  <a href="{{ url('create') }}" class="btn btn-success btn-sm" title="Add New Menu">
					    <i class="fa fa-plus" aria-hidden="true"></i> Add New
					  </a>
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
							<th scope="col">Action</th>
  
                        </tr>
						</thead>
  

                    @foreach($details as $men)
                       <tr>

                           <td>{{$loop->iteration}}</th>
                           <td>{{$men->name}}</th>
	                       <td>{{$men->cat_id}} </th>
						  <td>{{$men->description}}</th>
						   <td>{{$men->price}}</th>
	                        <td>
	                          
							<img src="{{ asset('uploads/menus/'.$men->Photo) }}" style="height: 100px; width: 150px;">
							   
	                        </td>
							 <td>
	                           <a href="{{ url('/delete_menu',$men->id) }}" style="color:white;background-color:#EB984E;border-radius:10%;margin-right:20px;padding: 5px 15px 5px 15px;">Delete</a>
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