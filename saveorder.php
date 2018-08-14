<?php
require 'config.php';
$userid=$_POST['userid'];
$buysell=$_POST['buysell'];
$range1=$_POST['range1'];
$range2=$_POST['range2'];
$bit=$_POST['bit'];
$currency=$_POST['currency'];
$price=$_POST['price'];
$query="INSERT INTO order1(userid,trade1,trade2,bitt,price,currency,buysell) VALUES ('$userid',$range1,$range2,'$bit',$price,'$currency','$buysell')";
echo $query;
mysqli_query($conn,$query);
header("location:home1.php");
?>