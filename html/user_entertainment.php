<?php
  
    include('session.php');
	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/start.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.events{
    -webkit-column-count: 3; /* Chrome, Safari, Opera */
    -moz-column-count: 3; /* Firefox */
    column-count: 3;
}
</style>
</head>
<body background="images/6900442-purple-abstract.jpg">
<img src="images/upcomingevents.jpg" height=120px width=400px style="float:left"></img>
<div class="box">
  <div class="container-1">
      <span class="icon"><i class="fa fa-search"></i></span>
      <input type="search" id="search" placeholder="Search..." />
  </div>
</div>
<br><br><br><br><br><br><br>
<div id='cssmenu'>    
	<ul>
	     <li><a href="user_home.php">HOME</a></li>
	     <li><a class="active" class="has-sub">EVENTS</a>
		 <ul>
		 <li><a class="has-sub" href="user_technical.php">TECHNICAL</a></li>
		 <li><a class="has-sub" href="user_sports.php">SPORTS</a></li>
		 <li><a class="has-sub" href="user_entertainment.php">ENTERTAINMENT</a></li>
		 </ul>	 
		 </li>
			 
	     <li><a href="user_workshop.php">WORKSHOPS</a></li>
		 <li><a href="user_conferences.php">CONFERENCES</a></li>
		 <li style="float:right"><a href="logout.php">LOGOUT</a></li>
		 <li style="float:right"><a href="">PROFILE</a></li>
	</ul>
<br><br></div>
<div class="events">
<img src="images/hdr_entertainment.jpg" height=300 width=300><br><br>
<h3>DJ Night With DJ HARDWELL <br><br>
FEE : RS 500/- Onwards</h3><br>
<a href="register.html"><button class="button1">
Click Here To Register</button></a>
<img src="images/dj-blend_1280x500.jpg" height=300 width=300><br><br>
<h3>Holi Party W/ DJ BL3ND <br><br>
FEE : RS 1500/- Onwards</h3><br>
<a href="register.html"><button class="button1">
Click Here To Register</button></a>
<img src="images/ET00039512.jpg" height=300 width=300><br><br>
<h3>Arijit Singh Live In Concert<br><br>
FEE : RS 2000/- Onwards</h3><br>
<a href="register.html"><button class="button1">
Click Here To Register</button></a>
</div>
</body>
</html>