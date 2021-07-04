<?php
session_start();
	
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
</head>
<body>
	<form action="" method="POST">
	<input type="text" name="name" placeholder="enter name">
	<input type="text" name="pwd" placeholder="enter pwd">
	<input type="submit" name="submit" >
	</form>
	
	<?php

if (isset($_POST["name"]) && isset($_POST["pwd"]))
{
   $name =  $_POST["name"];
   $pwd =  $_POST["pwd"];
   
   if ($name == "david" && $pwd == "111")
   {
	 $name =  $_SESSION["name"] =$name;
      $pwd =  $_SESSION["pwd"] =$pwd;	 
	  
	  header('location:reg2.php');
   }
   else{
	   echo "invalid";
   }
	
}


?>
</body>
</html>