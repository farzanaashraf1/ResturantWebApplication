<x-app-layout>
<x-admin-header />


        <div class="container">
		    <div class="row">
			     <div class="col-md-2">
			      </div>
			      <div class="col-md-10">
			        <table class="table table-hover">
					 <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Emails</th>
							<th scope="col">Actions</th>
  
                        </tr>
						</thead>
						   @foreach($user as $stu)
                         <tr>
                           <td>{{$stu->id}}</th>
                           <td>{{$stu->name}}</th>
	                       <td>{{$stu->email}}</th>
	                        <td>
	                           <a href="{{ url('/delete_staff',$stu->id) }}" style="color:white;background-color:#EB984E;border-radius:10%;margin-right:20px;padding: 5px 15px 5px 15px;">Delete</a>
	                        </td>
							
	                  </tr>
	                  @endforeach
	               </table>
			   </div>
			  </div>
			 </div>
		  </div>
		  
		  <br><br>
		   <br><br>



















</x-app-layout>