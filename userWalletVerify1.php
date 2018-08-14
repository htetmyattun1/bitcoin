<?php
include 'config.php';

$userid=$_POST["userid"];
  $imagename=$_FILES["cryptowallet"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['cryptowallet']['tmp_name']));

//Insert the image name and image content in image_table
$insert_image="INSERT INTO cryptowallet(userid,cryptowallet,content) VALUES('$userid','$imagename','$imagetmp')";

mysqli_query($conn,$insert_image);

  


	header("Location: userAssetVerifypending.php");

?>
