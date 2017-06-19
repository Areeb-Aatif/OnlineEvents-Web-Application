<?php

$username = $email = $gender = $password = $agreement="";
$nameErr = $emailErr = $genderErr = $passwordErr = $agreementerr="";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if ($_POST["username"]=="USERNAME" || $_POST["username"]== "" || $_POST["username"]== NULL) {
    $nameErr = "Name is required";
  } else {
    $username = test_input($_POST["username"]);
	// validating name field::
	if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
       $nameErr = "Only letters and white space allowed"; 
     }
   }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
	// Validating email-id::
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
	 }
    }


}

     function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
   }

?>

<html>
<head>
</head>
<body>
<?php

  if($emailErr !="")
  {
	echo $emailErr;
  }
  else if($nameErr !="")
  {
	  echo $nameErr;
  }
  else
  {
	  include("signup_config.php");
 }
  ?>
 </body>
 </html>
 