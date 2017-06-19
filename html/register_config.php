<?php

    //session_start();
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
	
	$phone=$_POST["phone"];
	$email=$_POST["email"];
	$payment=$_POST["payment"];
	}
	if($payment=='No'){
		header("location:register.html");
	}
	
if(mysqli_query($conn,("INSERT INTO register (phone,email,payment) VALUES ('$phone','$email','$payment')")))
{
   // $_SESSION['login_user']=$username;    
	//$success="Successfully Signed up Please click Login";
	header("location:after_register.php");
}
else {
    
	echo "could not be registered";
}

$conn->close();
?>

	