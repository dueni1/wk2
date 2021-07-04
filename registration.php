
<?php
session_start()
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php
if (isset($_POST["name"]) && isset($_POST["pwd"])){
	
	$name =  $_SESSION["name"] =$name;
      $pwd =  $_SESSION["pwd"] =$pwd;	 
}
?>

<?php
//FORM VALIDATION
//how to have security in your website
//htmlspecialchars turns the html elements into a different format to stop hackers from hacking,
//PHP_SELF makes it return data to same page in a safer way rather thaan writing the name of the page 
//it should return it to
//define variables and set to empty

$name = $email = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	//test_input saves you from rewriting same codes again and helps do all the checkng//
	
	$name = test_input($_POST["name"]);
	$email = test_input($_POST["email"]);
	
}

function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>





<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name<input type="text" class="" name="name" placeholder="Name" required><br>
Email<input type="text" class="" name="email" placeholder="Email" required><br>


<input type="submit" name="submit" value="submit">

</form>

<?php
echo $name;
echo "<br>";
echo $email;


?>





</body>
</html>








