<?php

    session_start();

    // variables for database::
	
	$dbhost="localhost";
	$dbuser="root";
	$dbpassword="";
	$dbdatabase_name="events";
		
	// connecting to database::
	
	$conn=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbdatabase_name) or die("Could not connect to Database");
	
	if(isset($_POST['submit'])){
		
			$user = $_POST['user'];
			$password =$_POST['password'];
			$select="select * from login where username='$user' && password='$password' ";
			$sql=mysqli_query($conn,$select) or die(mysqli_error());
			
			if(mysqli_num_rows($sql) > 0)
			{
				$_SESSION['login_user']=$user; 
				header("location:user_home.php");
			}
			else
			{
				$_SESSION['errors'] = array("Your username or password was incorrect.");
				//echo "login failed";
				header("location:login.php");
			}
			
	}
	
	$conn->close();
?>