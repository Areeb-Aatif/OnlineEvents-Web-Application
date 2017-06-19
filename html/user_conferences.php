<?php
  
    include('session.php');
	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="css" href="css/start.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.events {
    -webkit-column-count: 3; /* Chrome, Safari, Opera */
    -moz-column-count: 3; /* Firefox */
    column-count: 3;
}
</style>
<script type="text/javascript" src="https://gc.kis.scr.kaspersky-labs.com/1B74BD89-2A22-4B93-B451-1C9E1052A0EC/main.js" charset="UTF-8"></script></head>
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
	     <li><a class="has-sub">EVENTS</a>
		 <ul>
		 <li><a class="has-sub" href="user_technical.php">TECHNICAL</a></li>
		 <li><a class="has-sub" href="user_sports.php">SPORTS</a></li>
		 <li><a class="has-sub" href="user_entertainment.php">ENTERTAINMENT</a></li>
		 </ul>	 
		 </li>
			 
	     <li><a href="user_workshop.php">WORKSHOPS</a></li>
		 <li><a class="active" href="user_conferences.php">CONFERENCES</a></li>
		 <li style="float:right"><a href="logout.php">LOGOUT</a></li>
		 <li style="float:right"><a href="">PROFILE</a></li>
	</ul>
</div>
<br><br>
<div class="events">
<img src="images/Global_Warming.jpg" height=300 width=300><br><br>
<h3>Global Warming<br><br>
April 10-11, 2016</h3><br>
<a href="register.html"><button class="button1">
Click Here To Register</button></a>
<img src="images/VRDC_regopen.jpg" height=300 width=300><br><br>
<h3>Virtual Reality<br><br>
March 14-15, 2016</h3><br>
<a href="register.html"><input type="button" class="button1" value="Click here to Register">
</a>
<img src="images/141111_Samsung_SDC_EnvironmentalGraphics-1981.jpg" height=300 width=300><br><br>
<h3>Samsung Developer Conference<br><br>
April 27-28, 2016</h3><br>
<a href="register.html"><button class="button1">
Click Here To Register</button></a>
</div>
</body>
</html>