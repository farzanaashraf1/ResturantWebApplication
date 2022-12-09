
<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
 <head>	
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.css')}}">

          <!---form---->
     <div class="container mt-5 mr-5">
		    <div class="row">
			   <div class="col-md-10">
			     <div class="card">
				    <div class="card-header">
					<h3 style="color:#EB984E;text-align:center"><b>Add News</b></h3>
					</div>
					<div class="card-body">
					</div>
					  
					<form action="createpost" method="POST" enctype="multipart/form-data">
				     @csrf
				 
				 <div>
				  <label>Title</label>
				  <input type="text"  id="title" name="title" class="form-control">
			     </div>
			   <div>
				  <label>Description</label>
				  <input type="text"  id="description" name="description" class="form-control">
			    </div>
					<div>
				  <input type="file" class="form-control"  name="Photo"   id="Photo" >
			     </div>
			   <button type="submit" class="btn btn-success">Submit</button>
			 </form>  
					</div>
				</div>
			</div>
		</div>
		  </div>
	