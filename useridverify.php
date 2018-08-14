<html>
	<head>
		<title>UserId Verify</title>
	</head>
	<body>
		
		<?php
		//include 'config.php';
		
	
		session_start();
		$sesusername=$_SESSION['username'];
		$dsn = "mysql:dbname=bitcoin";
		$username="root";
		$password="";
		$conn = new PDO($dsn, $username,$password);
		if(!isset($sesusername))
		{
			header("Location: login1.php");	
			
		}
		else {
			$query = "SELECT * FROM user WHERE email='$sesusername' ";
			$rows = $conn->query($query);
			$n;
			
			foreach ($rows as $row) {
				$num=1;			
			$n=$row["email"];	
			$userid=$row['userid'];
			if ($n==$sesusername)
			{
				break;
			}
			else {
				$num=0;
			}
					}
			if($num==0)
			 header("Location: login1.php");	
				
			}
					
		
		
		?>
	
		
		<h2>UserId Verify</h2>
		<form action="useridverify1.php" method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td>Please upload copy of passport</td>
					<td><input type="file" name="passport" required="required" autocomplete="off"  autofocus /></td>
				</tr>
				<tr>
					<td>Please upload copy of utility bill</td>
					<td><input type="file" name="utility" required="required" autocomplete="off"  autofocus /></td>
				</tr>
			</table>
			<input type="hidden" name="userid" value="<?php echo $userid;?>" />
			<button type="submit">Submit</button>
		</form>
	</body>
</html>