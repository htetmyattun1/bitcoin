<html>
	<head></head>
	<body>
		<h2>Verify Crypto Wallet</h2>
		<form>
			<?php
			require 'config.php';
			$id=$_POST['id'];
			$query="SELECT * FROM user WHERE id='$id'";
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
					<td>ID submitted</td>
					<td>ID Verified</td>
				</tr>
				<tr>
					<td><?php echo $row['userid']; ?></td>
					<td><?php echo $row['firstname'];?></td>
					<td></td>
					<td></td>
					<td><?php echo $row['email'];?></td>
					<td></td>
					<td></td>
				</tr>
			</table>
		</form>
		<form>
			<?php
			$userid=$row['userid'];
				 $sql = "select content from cryptowallet where userid='$userid'";
				 $result = mysqli_query($conn,$sql);
				 $row = mysqli_fetch_array($result);
				
				 
				echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['content'] ).'"style="width:500px;height:400px;"/>'; ?>
				<figcaption>Crypto Wallet</figcaption>
				
				
				
		</form>
		<input type="submit" value="Contact User" />
		
			<input type="submit" value="Complete Asset Verification" />
	</body>
</html>