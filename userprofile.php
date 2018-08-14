<html>
	<head></head>
	<body>
		<h2>User Profile</h2>
		
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

		
		<form>
			<?php
			require 'config.php';
			
			$query="SELECT * FROM user WHERE userid='$userid'";
			$result=mysqli_query($conn,$query);
			$row=mysqli_fetch_assoc($result);
			
			?>
			<table border="1">
				<tr>
					<td>User ID</td>
					<td>User</td>
					<td>Trades</td>
					<td>Positive Feedback</td>
					<td>Email</td>
					<td>Passport</td>
					<td>Utility</td>
				</tr>
				<tr>
					<td><?php echo $row['userid']; ?></td>
					<td><?php echo $row['firstname'];?></td>
					<td></td>
					<td></td>
					<td><?php echo $row['email'];?></td>
					
			
			
			
					<td>
						<?php
		
			$query1="SELECT passportverify FROM passport WHERE userid='$userid'";
			$result1=mysqli_query($conn,$query1);
			$rows1=mysqli_fetch_assoc($result1);
			$passportverify=$rows1['passportverify'];
			if($passportverify==2)
			{
			?>
			<a href="useridverify.php">No</a>
			<?php
			}
			elseif($passportverify==0){
				echo "Waiting Verify";
			}
			else {
				echo "Yes";
			}
			?>
			
					</td>
					<td>
						<?php
						if($passportverify==2)
			{
			?>
			<a href="useridverify.php">No</a>
			<?php
			}
			elseif($passportverify==0){
				echo "Waiting Verify";
			}
			else {
				echo "Yes";
			}
			?>
					</td>
				</tr>
			</table>
		</form>
		
		<input type="submit" value="Contact User" />
		<form action="idverify.php" method="post">
			<input type="hidden" value="<?php echo $userid;?>" name="userid" />
			<input type="submit" value="Complete ID Verification" />
		</form>
	</body>
</html>