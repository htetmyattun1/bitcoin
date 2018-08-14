<?php
include 'config.php';

$userid=$_POST["userid"];
  $imagename=$_FILES["passport"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['passport']['tmp_name']));

//Insert the image name and image content in image_table
$insert_image="UPDATE passport set passport='$imagename' where userid='$userid'";

mysqli_query($conn,$insert_image);
$insert_image="UPDATE passport set content='$imagetmp',passportverify=0 where userid='$userid'";

mysqli_query($conn,$insert_image);

  $imagename1=$_FILES["utility"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp1=addslashes (file_get_contents($_FILES['utility']['tmp_name']));

//Insert the image name and image content in image_table
$insert_image1="INSERT INTO utilitybill(userid,utilitybill,content) VALUES('$userid','$imagename1','$imagetmp1')";

mysqli_query($conn,$insert_image1);

	header("Location: useridverifypending.php");

?>
