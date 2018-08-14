<?php
include 'config.php';
$userid=$_POST['userid'];
$query="update passport set passportverify=1 where userid='$userid'  ";
mysqli_query($conn,$query);
header("location:adminallusers.php");
 
?>