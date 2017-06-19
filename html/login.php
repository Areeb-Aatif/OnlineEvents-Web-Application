<?php
   
      include("login_config.php");
	  
?>
<!DOCTYPE html>
<html>
<head>


	<title>Login Page</title>
		<meta charset="utf-8">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link href="css/start.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
	
     <script type="text/javascript">
           function Validateform()
		   {
		      
			  var user = document.getElementById('user').value;
			  var password = document.getElementById('password').value;
			 
			  
			  if(user == "" || user == "USERNAME")
			  {
			     alert("Username Not Entered");
				 return false;
			  }
			  
			  else if(password == "" || password == "password")
			  {
			     alert("Password Not Entered");
				 return false;
			  }
			  else
			  {
			     return true;
			  }
		   
		   
		   }
		   
        </script>
	
</head>
<body background="images/abstract-hd-wallpaper-0079.jpg">
	<img src="images/upcomingevents.jpg" height=120px width=400px style="float:left"></img><br>
	<div class="box">
  <div class="container-1">
      <span class="icon"><i class="fa fa-search"></i></span>
      <input type="search" id="search" placeholder="Search..." />
  </div>
</div>
	<br><br><br><br><br><br>
<div id='cssmenu'>    
	<ul>
	     <li><a href="home.html">HOME</a></li>
	     <li><a class="has-sub">EVENTS</a>
		 <ul>
		 <li><a class="has-sub" href="technical.html">TECHNICAL</a></li>
		 <li><a class="has-sub" href="sports.html">SPORTS</a></li>
		 <li><a class="has-sub" href="entertainment.html">ENTERTAINMENT</a></li>
		 </ul>	 
		 </li>
			 
	     <li><a href="workshop.html">WORKSHOPS</a></li>
		 <li><a href="conferences.html">CONFERENCES</a></li>
		 <li style="float:right"><a href="signup.html">SIGNUP</a></li>
		 <li style="float:right"><a class="active" href="login.html">LOGIN</a></li>
	</ul>
</div>
<br><br>
     <?php if (isset($_SESSION['errors'])): ?>
    <div class="form-errors">
        <?php foreach($_SESSION['errors'] as $error): ?>
            <h3 align="center" style="color:red" ><?php echo $error ?></h3>
        <?php endforeach; ?>
    </div>
<?php endif; ?> 
	 <div class="main">
		<div class="login-form">
			<h1>Member Login</h1>
					<div class="head">
						<img src="images/user.png" alt="USER"/>
					</div>
				<form action="login_config.php" method="post" onsubmit="return Validateform()" >
						<input type="text" id="user" name="user" class="text" value="USERNAME" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'USERNAME';}" >
						<input type="password" id="password" name="password" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PASSWORD';}">
						<div class="submit">
							<input type="submit" name="submit" value="LOGIN" >
					</div>	
					<p><b><a class="a" href="">Forgot Password ?</a></b></p>
					<p><b><a class="a" href="signup.html">Create Account</a></b></p>
				</form>
			</div>
			
	    </div>	

</body>
</html>