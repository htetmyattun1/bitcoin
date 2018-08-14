
<html>
	<head></head>
	<body>
			 <form action="" method="post">
		<p>Please Update User Asset!!!</p>
		<input type="text" name="asset" />
		<select name="currency">
				 	<optgroup label="currency">
				 	<option value="USD">USD</option>
				 	<option value="SGD">SGD</option>
				 	</optgroup>
				 </select>
			
				 	
				 	<input type="submit" name="submit" value="Submit" />
				 </form>

		
	</body>
</html>
<?php
$userid=$_POST['userid'];
require 'config.php';
if(isset($_POST['submit']))
{

$asset=$_POST['asset'];
$currency=$_POST['currency'];
$qq="UPDATE assetverify SET asset=$asset,currency='$currency',assetverify=1 WHERE userid='$userid'";

mysqli_query($conn,$qq);
}

?>