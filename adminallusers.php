<html>
	<head>
		<title>All User Information</title>
	</head>
	<body>
		<h2>All User Information</h2>
		
			<table border="1">
				<tr>
					<td>User ID</td>
					<td>User</td>
					<td>Trades</td>
					<td>Positive Feedback</td>
					<td>Email</td>
					<td>ID Submitted</td>
					<td>ID Verified</td>
				</tr>
		<?php
		require 'config.php';
		$query="SELECT * FROM user";
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
			?>
			
					</td>
					<td>
				
					</td>
					<td>
						
					</td>
					<td>
						
			
			<?php echo $rows['email']; ?>
					</td>
					<td>
						
						<?php
						$userid=$rows['userid'];
						$query1="SELECT passportverify FROM passport WHERE userid='$userid'";
						$result1=mysqli_query($conn,$query1);
						$rows1=mysqli_fetch_assoc($result1);
						$passportverify=$rows1['passportverify'];
						if($passportverify==2)
						{
						?>
						<input type="submit" value="View" disabled="disabled" />
						<?php	
						}
						else{
							?>
							<form method="post" action="adminoneuser.php">
													<input type="submit" value="View" />
													<input type="hidden" name="id" value="<?php echo $rows['id'] ?>" />
												
												</form>
							<?php
							
						}
						?>
					</td>
					<td>
						<?php
						
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
				</tr>
			
			<?php
		}
		?>
		</table>
			
		
	</body>
</html>