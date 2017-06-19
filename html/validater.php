<?php

$email = $phone="";
$emailErr = $phoneErr="";
$error="";
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  if (empty($_POST["email"])) {
    $error=$emailErr = "Email is required";
	
  } else {
    $email = test_input($_POST["email"]);
	// Validating email-id::
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr =$error= "Invalid email format"; 
	 }
    }

$min = 0;
$max = 99999999999;
 if (empty($_POST["email"])) {
    $error=$emailErr = "Email is required";
	
  } else {
    $phone = test_input($_POST["phone"]);
	// Validating email-id::
     if (filter_var($phone, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
    echo("error");
   }
    }


if($error=="")
{
	header("location:register_config.php");
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
  else if($phoneErr !="")
  {
	  echo $phoneErr;
  }
 
  ?>
 </body>
 </html>
 