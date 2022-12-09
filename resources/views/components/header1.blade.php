<div>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.css')}}">
<style>
container-fluid {
  position: relative;
  font-family: Arial;
  margin-top:150px;
}

.text-block {
	margin-top:250px;
  position: absolute;
  top:250px;
  bottom: 50px;
  left: 30px;
  background-color: black;
  color: white;
  padding:150px;
  
}
.a:hover{
	
	color:white;
	background-color:green;
}
</style>
</head>


  <body>
      
	
	
	   <!-- Nav Bar -->
	 <div class="container-fluid">
	   <div class="row">
	     <!-- Logo --> 
	       <div class="col-md-2">
             <img src="{{ URL('img/logo.png') }}" style="float:right;width:130px;height:120px;">
		   </div>
		    <div class="col-md-8 mt-5">
                <nav class="navbar navbar-expand-sm nav justify-content-center">
	                <ul class="navbar-nav">
                       <li class="nav-item">
                         <a class="nav-link"style="color:white;background-color:#D17008;border-radius:15%;margin-right:20px;padding: 5px 15px 5px 15px;;" href="/">Home</a>
                        </li>
                      <li class="nav-item">
                          <a class="nav-link"style="color:white;background-color:#D17008;border-radius:15%;margin-right:20px;padding: 5px 15px 5px 15px;" href="/about">About Us</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link"style="color:white;background-color:#D17008;border-radius:15%;margin-right:20px;padding: 5px 15px 5px 15px;" href="/blog">Blog</a>
                      </li>
			          <li class="nav-item">
                          <a class="nav-link"style="color:white;background-color:#D17008;border-radius:15%;margin-right:20px;padding: 5px 15px 5px 15px;" href="/Reservation">Reservation</a>
                      </li>
			          <li class="nav-item">
                          <a class="nav-link"style="color:white;background-color:#D17008;border-radius:15%;margin-right:20px;padding: 5px 15px 5px 15px;" href="/contact">Contact Us</a>
                     </li>
                   </ul>
                </nav>
		    </div>
		   <!-- login --> 
		 <div class="col-md-2 pt-5 mt-3">
             @if (Route::has('login'))
                <div >
                    @auth
                        <a href="{{ url('/dashboard') }}" style="color:white;background-color:#EB984E;border-radius:15%;margin-right:20px;padding:7px;">Dashboard</a>
                    @else
                             <a href="{{ route('login') }}" style="color:white;background-color:green;border-radius:15%;margin-right:20px;padding:7px;">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" style="color:white;background-color:green;border-radius:15%;margin-right:20px;padding:7px;">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
		   </div>
    </div>
</div>

	      <!-- main image -->


</div>