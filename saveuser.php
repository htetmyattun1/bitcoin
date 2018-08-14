<?php
require 'config.php';
$name=$_POST['firstname'];
$lastname=$_POST['lastname'];
$userid=$_POST['userid'];
$email=$_POST['email'];
$password=$_POST['password'];

$query="INSERT INTO user(firstname,lastname,email,password,userid) VALUES ('$name','$lastname','$email','$password','$userid')";

mysqli_query($conn,$query);
$q="INSERT into passport(userid,passportverify) values('$userid',2)";
mysqli_query($conn,$q);
header("location:home1.php");
?>