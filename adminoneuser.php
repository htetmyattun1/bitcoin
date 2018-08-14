<html>
	<head></head>
	<body>
		<h2>Verify ID</h2>
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
					<td>ID Verified</td>
				</tr>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['userid'];?></td>
					<td></td>
					<td></td>
					<td><?php echo $row['email'];?></td>
					
					<td><?php
						$userid=$row['userid'];
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
							
						?></td>
				</tr>
			</table>
		</form>
		<form>
			<table border="1">
				<tr>
					<td>
						<?php
$userid=$row['userid'];
				 $sql = "select content from passport where userid='$userid'";
				 $result = mysqli_query($conn,$sql);
				 $row = mysqli_fetch_array($result);
				
				 
				echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['content'] ).'"style="width:500px;height:400px;"/>'; ?>
				<figcaption>Passport</figcaption>
					</td>
					<td>
						<?php
				 $sql1 = "select content from utilitybill where userid='$userid'";
				 $result1 = mysqli_query($conn,$sql1);
				 $rows = mysqli_fetch_array($result1);
				
				 
				echo '<img src="data:image/jpeg;base64,'.base64_encode( $rows['content'] ).'" style="width:500px;height:400px;"/>'; ?>
				<figcaption>Utility Bill</figcaption>
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