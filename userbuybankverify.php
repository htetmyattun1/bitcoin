<html>
	<head></head>
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
			$offeruserid=$row['userid'];
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
		<?php
		require 'config.php';
		$orderid=$_POST['orderid'];
		$trade=$_POST['trade'];
		$price=$_POST['price'];
		$bitt=$_POST['bitt'];
		$currency=$_POST['currency'];
		$userid=$_POST['userid'];
		$query="INSERT INTO buyoffer(orderid,trade,bitt,price,currency,offeruserid) VALUES($orderid,$trade,'$bitt',$price,'$currency','$offeruserid')";
		echo $query;
		mysqli_query($conn,$query);
		
		?>
		<table border="1">
			<tr>
				<td>User</td>
				<td>ID Verified</td>
				<td>Asset Verified</td>
				<td>Trade</td>
				<td>Price</td>
				
				<td>My Asset Verify</td>
			</tr>
			<tr>
				<td>
					<?php echo $userid; ?>
				</td>
				<td>
					<?php
					
						$query1="SELECT passportverify FROM passport WHERE userid='$userid'";
						$result1=mysqli_query($conn,$query1);
						$rows1=mysqli_fetch_assoc($result1);
						$passportverify=$rows1['passportverify'];
						if($passportverify==0||$passportverify==2)
						{
								?>
							<input type="checkbox" disabled="disabled"/>
							<?php 
						}
						else {
								?>
							<input type="checkbox"  disabled="disabled" checked="checked">
							<?php 
						}
						
					
					?>
				</td>
				<td>
					
				</td>
				<td>
					<?php echo $trade.$bitt;?>
				</td>
				<td>
					<?php echo $price.$currency; ?>
				</td>
				<td>
					
				</td>
				
			</tr>
		</table>
		<form action="userBankVerify.php" method="post">
			<input type="submit" value="Verify Bank Statement"/>
		</form>
	</body>
</html>