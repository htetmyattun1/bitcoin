<html>
	<head>
		
	</head>
	<body>
		<?php
		require 'config.php';
		$orderid=$_POST['orderid'];
		$query="SELECT * FROM order1 where id=$orderid;";
		$result=mysqli_query($conn,$query);
		$row=mysqli_fetch_assoc($result);
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
					
			</tr>
			
			
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
					
				</tr>
			
			
			
		</table>
		<form action="userbuybankverify.php" method="post">
			<input type="hidden" name="userid" value="<?php echo $userid; ?>" />
			<input type="hidden" value="<?php echo $row['id'] ?>" name="orderid" />
		<p>I want to buy  <input type="text" name="trade"  /> 
			<?php echo $row['bitt'];?> at  <?php echo $row['price'].$row['currency']."/".$row['bitt'];?> 
			for
			 <input type="text" name="price" /> <?php echo $row['currency'] ?>
			 <input type="hidden" name="bitt" value="<?php echo $row['bitt'] ?>" />
			 <input type="hidden" name="currency" value="<?php echo $row['currency'] ?>" />
			 </p>
		<input type="submit" value="Make Buy Offer" />
		</form>
	</body>
</html>