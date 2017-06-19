<?php

    session_start();

    // variables for database::
	
	$dbhost="localhost";
	$dbuser="root";
	$dbpassword="";
	$dbdatabase_name="events";
	$success="";
	
	$sitename="Online Events";
	$baseurl="http://localhost/";
		
	// connecting to database::
	
	$conn=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbdatabase_name) or die("Could not connect to Database");
	
	
	if(isset($_POST['submit'])){
	
	$username=$_POST["username"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$gender=$_POST["gender"];
	
	
	}
if(mysqli_query($conn,("INSERT INTO login (username,email,password,gender) VALUES ('$username','$email','$password','$gender')")))
{
   // $_SESSION['login_user']=$username;    
	//$success="Successfully Signed up Please click Login";
	header("location:after_signup.html");
}
else {
    
	echo "Account could not be created";
}

$conn->close();
?>

	