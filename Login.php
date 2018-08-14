<html>
<body>
<?php
require_once('config.php');
session_start(); //It is advised to open a session in the beginning

$usernameLogn = $_POST["username"]; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[]
$passwordLogin = $_POST["password"];
$myusername = stripslashes($usernameLogn); // stripslashes() is used to clean up data retrieved from an HTML form
$mypassword = stripslashes($passwordLogin);
$myusername = mysqli_real_escape_string($conn,$_POST['username']); // Escapes special characters in a string for use in an SQL statement
$mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
$query = "SELECT userid FROM user WHERE email = '$myusername' and password = '$mypassword'"; //Fetching all the records with input credentials
$_SESSION['username']=$myusername; 
$result = mysqli_query($conn,$query);
$count = mysqli_num_rows($result);
if($count == 1)
{
	header("Location: home1.php");
}
else
{
 header("location: login1.php"); 
} 


?>
</body> 
</html>