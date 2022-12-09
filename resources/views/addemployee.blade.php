<x-app-layout>
<x-admin-header />
 <html>
 <head>
     <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.css')}}">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

       
    </head>
 </head>
 <body>
  
   <div>
	 <h3 style="color:#EB984E;text-align:center"><b>Admin Dashboard</b></h3>
	 </div>
	 
	 <!-- Employee add by Admmin -->
		  <div class="container">
		    <div class="row">
			<div class="col-md-2">
			</div>
			  <div class="col-md-8 mt-4">
			     <h4>Add Employee</h4>
               <form action="{{('/addemployee')}}" method="POST">
			      @csrf
			       <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="name" class="form-control" id="email" placeholder="Enter name" name="name">
                      </div>
                      <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                      </div>
                     <div class="form-group">
                       <label for="pwd">Password:</label>
                       <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                    </div>
                   <div class="form-group form-check">
                      <label class="form-check-label">
                     <input class="form-check-input" type="checkbox" name="remember"> Remember me
                  </label>
                 </div>
               <button type="submit" class="btn btn-success">Submit</button>
          </form>
			  </div>
			 </div>
		  </div>
		  
		  <br><br>
		   <br><br>
 </body>
 
 </html>
		   
  
  
</x-app-layout>

