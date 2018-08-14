<html>
	<head>
		<title>User Current Order</title>
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
		
		<h2>User Current Order</h2>
		
			<table border="1">
				<tr>
					<td>Order</td>
					<td>My Asset Verified</td>
					<td>Price</td>
					<td>Offering User</td>
					<td>ID Verified</td>
					<td>Asset Verified</td>
					<td>Offer</td>
					<td>Accept Offer</td>
					<td>Delete</td>
				</tr>
				
		<?php
		require 'config.php';
		$query="SELECT * FROM order1 WHERE userid='$userid'";
		
		$result=mysqli_query($conn,$query);
		
		while ($rows=$result->fetch_assoc())
		
		{
			?>
			
				<tr>
					<td>
						
							<?php
			echo $rows['buysell']." ".$rows['trade1']."-".$rows['trade2']." ".$rows['bitt'];
			?>
						
					</td>
					<td>
					
			<?php
			
			?>
			
					</td>
					<td>
						<?php
			echo $rows['price'].$rows['currency']."/".$rows['bitt'];
			?>
					</td>
					<td>
						<?php
			echo ".......";
			?>
					</td>
					<td>
						
			<?php
			echo "...........";
			?>
			
					</td>
							
							<td>
						
			<?php
			echo "............";
			?>
			
					</td>
					<td>
						.......
					</td>
					<td>
							.....
						</td>
					<td>
						
						<form method="post" action="deleteorder.php">
							<input type="submit" value="Delete" />
							<input type="hidden" name="id" value="<?php echo $rows['id'] ?>" />
						
						</form>
					</td>
				</tr>
			
			<?php
		}
		?>
		</table>
			
		
	</body>
</html>