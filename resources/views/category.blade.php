<x-app-layout>
<x-admin-header />

         <div class="container mr-5">
		    <div class="row">
			   <div class="col-md-12">
			     <div class="card">
				    <div class="card-header">Category</div>
					<div class="card-body">
					   
					 <!-- Form of adding Catogery-->  
					   
					   
					   <div class="container mr-5">
		      <div class="row">
			   <div class="col-md-12">
			     <div class="card">
				    <div class="card-header">
					<h3 style="color:#EB984E;text-align:center"><b>Add Category</b></h3>
					</div>
					 @if(session()->has('status'))
				  <div class="alert alert-success mt-3">
				   {{session('status')}}
			        </div>
		            @endif
	            <form action="category" method="POST" enctype="multipart/form-data">
				     @csrf
				 <div>
				  <label>Name</label>
				  <input type="text"  id="name" name="name" class="form-control">
			     </div>
				 <br>
			   <button type="submit" class="btn btn-success">Submit</button>
			   <button type="reset" class="btn btn-success">Reset</button>
			 </form>  
					</div>
				</div>
			</div>
		</div>
		           <!-- Show data of Catogery-->  
	                <br/>
					   <br/>
		
			          <div class="table-responsiv">
					  
			        <table class="table">
					 <thead>
					 <tbody>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
							<th scope="col">Action</th>
                        </tr>
						 @foreach($details as $cat)
                       <tr>
                         <td>{{$loop->iteration}}</th>
                           <td>{{$cat->name}}</th>
							 <td>
	                           <a href="{{ url('/delete_category',$cat->id) }}" style="color:white;background-color:#EB984E;border-radius:10%;margin-right:20px;padding: 5px 15px 5px 15px;">Delete</a>
	                        </td>
	                     </tr>
	                  @endforeach
						
						</thead>
                </tbody>
	                  </table>
				   </div>
			    </div>
		     </div>
	       </div>
	   </div>
     </div>
	 


















</x-app-layout>