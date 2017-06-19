<?php
   
    include('session.php');
	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/start.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
	     <li><a class="active" href="user_home.php">HOME</a></li>
	     <li><a>EVENTS</a>
		 <ul>
		 <li><a href="user_technical.php">TECHNICAL</a></li>
		 <li><a href="user_sports.php">SPORTS</a></li>
		 <li><a href="user_entertainment.php">ENTERTAINMENT</a></li>
		 </ul></li>
			 
	     <li><a href="user_workshop.php">WORKSHOPS</a></li>
		 <li><a href="user_conferences.php">CONFERENCES</a></li>
		 
		 <li style="float:right"><a href="logout.php">LOGOUT</a></li>
		 <li style="float:right"><a href="">PROFILE</a></li>
			 
	</ul>
</div>
<h2 align="center" style="color:red">Successfully Registered</h2>
<div class="roll">
<marquee  scrollamount=12 behavior="scroll" loop=100> 
<img src="images/VRDC_regopen.jpg" height=400 width=800>
<img src="images/01_image_gallery_desktop.png" height=400 width=800>
<img src="images/spotlight.jpg" height=400 width=800>
<img src="images/devday_google.jpg" height=400 width=800>
<img src="images/141113_Samsung_SDC_TechnicalKeynote-7080.jpg" height=400 width=800>
<img src="images/dj-blend_1280x500.jpg" height=400 width=800>
</marquee></div>
<div class="para">
<p><b>From one hour webinars to multi-day <br>conferences delivered
anywhere in the <br>world. Online conferences and events <br>bring you
timely and relevant<br> information.<br>
Choose an online event...</p>
</div>
</body>
</html>