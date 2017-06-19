<?php

    $dbhost="localhost";
	$dbuser="root";
	$dbpassword="";
	$dbdatabase_name="events";
	
	$conn=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbdatabase_name) or die("Could not connect to Database");
	
	session_start();
	
	$user_check=$_SESSION['login_user'];
	$select="select username from login where username='$user_check'";
	$ses_sql=mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($ses_sql);
    $login_session =$row["username"];
    if(!isset($login_session)){
       mysqli_close($conn); // Closing Connection
       header('Location:home.html'); // Redirecting To Home Page
    }
	
?>



	
	
	
	