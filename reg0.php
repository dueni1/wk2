<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
/** this page is to check after the echo if the name and password email set is reflecting**/
if (isset($_POST["name"]) && isset($_POST["pwd"])){
	
	$name =  $_SESSION["name"] =$name;
	  $email =  $_SESSION["email"] =$email;	
      $pwd =  $_SESSION["pwd"] =$pwd;	 
}

	
echo "welcome " . $_SESSION["name"] . ".<br>";
echo "password is " . $_SESSION["pwd"] . ".";
?>
	
</body>
</html>