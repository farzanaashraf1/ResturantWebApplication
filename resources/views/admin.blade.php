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
	 
	 <!-- Admmin  welcome note-->

  
   <br><br>
    <div class="container">
		 <div class="row">
		   <div class="col-md-3">
		    </div>
				   
				   <div class="bg-success text-white p-5 text-center">
				    <h3> Welcome In Admin Pannel </h3>
					<p>This is a warm welcome to dashboard where you get all the details of <br>
					    Where you get User and Employee details
					</p>
				   </div>
		  </div>
	    </div>
		<div class="container mr-5">
		 <div class="row">
		 		<div class="bg-white text-white p-5 text-center">
			
				   </div>
		    <div  style="background-color:#EB984E;color:white;text-align:center;padding:35px;">
				    <h3> Employee </h3>
					<p>Here you can edit Employee's Portal<br>
					   Also can Add Eployee
					</p>
		   </div>
				   <div class="bg-white text-white p-5 text-center">
			
				   </div>
				   
		  <div  style="background-color:#EB984E;color:white;text-align:center;padding:35px;">
				    <h3> User's  </h3>
					<p>Here you can view Users Details<br>
					   Also can View and Delete User from portal
					</p>
		</div>
		  </div>
	    </div>
		 
		  
		  <br><br>
		   <br><br>
 </body>
 
 </html>
		   
  
  
</x-app-layout>

