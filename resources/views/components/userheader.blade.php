<head>	
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.css')}}">
<style>
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: green;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #EB984E;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<body>
  <div class="sidebar">
  <a class="active" href="/dashboard">Home</a>
  <a href="/usermenu">Menu</a>
  <a href="/onlinebooking">Online Booking</a>
  <a href="/checkstatus">CheckStatus</a>
  <a href="/viewposts">What's New</a>
  
</div>

</body>
  
  
 
</div>