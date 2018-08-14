<html>
	<head>
		
	</head>
	<body>
		<h1>HOME 1</h1>
		<?php
		require 'config.php';
		$query="SELECT * FROM order1;";
		$result=mysqli_query($conn,$query);
		
		?>
		
			<table border="1">
				<tr>
					<td>User</td>
					<td>ID Verified</td>
					<td>Asset Verified</td>
					<td>Trade Range</td>
					<td>Price</td>
					<td>City</td>
					<td>Payment Method</td>
					<td>Trade</td>
				</tr>
				<?php
				
						
				while($row=mysqli_fetch_assoc($result))
				{
				?>
				<tr>
					<td>
						<?php echo $row['userid'];
						$userid=$row['userid']; ?>
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
						<?php  ?>
					</td>
					<td>
						<?php echo $row['trade1']."-".$row['trade2']." ".$row['bitt']; ?>
					</td>
					<td>
						<?php echo $row['price'].$row['currency']."/".$row['bitt']; ?>
					</td>
					<td>
						<?php echo "Singapore" ?>
					</td>
					<td>
						<?php echo "Bank Transfer"  ?>
					</td>
					<td>
						<form action="userbuy.php" method="post">
							<input type="hidden" value="<?php echo $row['id']; ?>" name="orderid"/>
							<input type="submit" value="Buy" />
							
						</form>
					</td>
				</tr>
				<?php
				}
				?>
			</table>
		
	</body>
</html>