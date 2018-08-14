<?php
include 'config.php';

$userid=$_POST["userid"];
  $imagename=$_FILES["asset"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['asset']['tmp_name']));

//Insert the image name and image content in image_table
$insert_image="INSERT INTO bankAsset(userid,bankasset,content,verify) VALUES('$userid','$imagename','$imagetmp',0)";

mysqli_query($conn,$insert_image);

  


	header("Location: userAssetVerifypending.php");

?>
