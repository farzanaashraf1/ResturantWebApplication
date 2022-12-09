<x-app-layout>
<x-employeeheader />

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<meta http-equiv="X-UA-Compatible" content=ie=edge">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" 
crossorigin="anonymous">

<title>Update data</title>
</head>
<body>

        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                 </div>
                <div class="col-lg-10">
				<div class="contact-form">
			     <form action="" method="POST">
				  @csrf
				  @method('PUT')
				  <div class="col-lg-12">
                                <h4 style="color:#EB984E;text-align:center">Verify Reservation</h4>
                            </div>
				  <div class="mb-3"
				  <label for="name" class="form-label">Name</label>
				  <input type="text" class="form-control" id="name"
				  name="name" value="{{$student->name}}">
			   </div>

			   <div class="mb-3"
				  <label for="verify" class="form-label">Update the User</label>
				   <select id="verify" class="form-control" 
				  name="verify" >
				 <option value="{{$student->verify}}">In a Process</option>
				  <option value="Reserved">Reserved</option>
				 <option value="Already Reserved">Already Reserved</option>
                  <option value="Table is not Free on Requested Date">Table is not Free on Requested Date</option>
                </select>
				  
				  
				  
			   </div>
			   <button type="submit" class="btn btn-success">Submit</button>
			 </form>  
			  @if(session()->has('status'))
				  <div class="alert alert-success mt-3">
				  {{session('status')}}
			       </div>
		     @endif
			   </div>
			   
			   
			</div>
		 </div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" 
crossorigin="anonymous"></script>

</body>

</x-app-layout>

