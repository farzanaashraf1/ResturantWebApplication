
<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
 <head>	
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.css')}}">
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
	    
  
     </style>

</head>

          <!---form---->
     <div class="container mt-5 mr-5">
		    <div class="row">
			   <div class="col-md-10">
			     <div class="card">
				    <div class="card-header">
					<h3 style="color:#EB984E;text-align:center"><b>Add Menu</b></h3>
					</div>
					<div class="card-body">
					</div>
					  
					<form action="create" method="POST" enctype="multipart/form-data">
				     @csrf
				 
				 <div>
				  <label>Name</label>
				  <input type="text"  id="name" name="name" class="form-control">
			     </div>
			   <div>
				  <label>Category</label>
			   <select name="cat_id" class="form-select">
                  <option value="hello">Select a Catogory</option>
				   
				  @foreach ($category as $item)
                  <option value="{{  $item->id }}">{{ $item->name }}</option>
				 @endforeach
                 
              </select>
			    </div>
			    <div>
				  <label>Description</label>
				  <input type="text"  id="description" name="description" class="form-control">
			     </div>
				 <div>
				  <label>Price</label>
				  <input type="text"  id="price" name="price" class="form-control">
			     </div>
				 <br>
				 <div>
				  <input type="file" class="form-control"  name="Photo"   id="Photo" >
			     </div>
				 <br>
			   <button type="submit" class="btn btn-success">Submit</button>
			   <button type="reset" class="btn btn-success">Reset</button>
			 </form>  
					</div>
				</div>
			</div>
		</div>
		  </div>
	