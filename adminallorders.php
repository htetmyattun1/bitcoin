<html>
	<head>
		<title>All User Information</title>
	</head>
	<body>
		<h2>All User Information</h2>
		
			<table border="1">
				<tr>
					<td>Trans</td>
					<td>User</td>
					<td>Order</td>
					<td>Price</td>
					<td>Buy/Sell</td>
					<td>Status</td>
					<td>Time/Date</td>
					<td>City</td>
					<td>ID verified</td>
					<td>Asset Verified</td>
					<td>Match</td>
				</tr>
		<?php
		require 'config.php';
		$query="SELECT * FROM order1";
		$result=mysqli_query($conn,$query);
		
		while ($rows=$result->fetch_assoc())
		
		{
			?>
			
				<tr>
					<td>
							<?php
			echo $rows['id'];
			?>
						
					</td>
					<td>
					
			<?php
			echo $rows['userid'];
			$userid=$rows['userid'];
			?>
			
					</td>
					<td>
						<?php
			echo $rows['trade1']." ".$rows['trade2']." ".$rows['bitt'];
			?>
					</td>
					<td>
						<?php
			echo $rows['price'].$rows['currency']."/".$rows['bitt'];
			?>
					</td>
					<td><?php echo $rows['buysell']; ?></td>
					<td></td>
					<td></td>
					<td>Singapore</td>
					<td></td>
					<td>
						<?php
						$query1="SELECT verify FROM bankasset WHERE userid='$userid'";
						$result1=mysqli_query($conn,$query1);
						while($rows1=mysqli_fetch_assoc($result1))
						{
						if($rows1['verify']==0)
						{
							$assetverify=0;
						}
						else {
							$assetverify=1;
						}
						}
						if($assetverify==1)
						{
						?>
						<input type="checkbox" checked="checked" disabled="disabled" />
						<?php	
						}
						else{
							?>
							<a href="adminoneorder.php?userid=<?php echo $userid?>&orderid=<?php echo $rows['id']?>">View</a>
							<?php
							
						}
						
						?>
					</td>
					<td></td>
					
				</tr>
			
			<?php
		
		}
		?>
		</table>
			
		
	</body>
</html>