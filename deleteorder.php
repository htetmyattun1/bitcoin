<?php
require 'config.php';
$id=$_POST['id'];
$query="DELETE FROM order1 WHERE id=$id";
echo $query;
mysqli_query($conn,$query);
header("location:usercurrentorder.php");
?>