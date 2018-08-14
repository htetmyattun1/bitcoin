<html>
	<head></head>
	<body>
		<h2>Verify Bank Statement</h2>
		
			<?php
			require 'config.php';
			$userid=$_GET['userid'];
			$orderid=$_GET['orderid'];
			
			?>
			<table border="1">
				<tr>				
					<td>User</td>
					<td>Order</td>
					<td>Price</td>
					<td>Buy/Sell</td>
					<td>Status</td>
					<td>ID verified</td>
					<td>Asset Verified</td>
				</tr>
		<?php
		require 'config.php';
		$query="SELECT * FROM order1 where userid='$userid'and id='$orderid'";
		$result=mysqli_query($conn,$query);
		$rows=mysqli_fetch_assoc($result);
			?>
			
				<tr>					
					<td>
					
			<?php
			echo $rows['userid'];
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
					<td>
						
					</td>
				</tr>
			
		</table>

	
			<?php
			
				 $sql = "select id,content,verify from bankAsset where userid='$userid'";
				 $result = mysqli_query($conn,$sql);
				 while($row = mysqli_fetch_array($result))
				
				 {
				echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['content'] ).'"style="width:500px;height:400px;"/>'; 
				if($row['verify']==0)
				{
					$id=$row['id'];
				}
				}
				?>
				<figcaption>Bank Statement</figcaption>
				
			
				
				
	
		
		<form action="" method="post">
			<p>Please Update User Asset!!!</p>
		<input type="text" name="asset" />
		<select name="currency">
				 	<optgroup label="currency">
				 	<option value="USD">USD</option>
				 	<option value="SGD">SGD</option>
				 	</optgroup>
				 </select>
			<input type="submit" value="Complete Bank Verification" name="submit"/>
			
			</form>
			<?php

$qry="select count(id) as a from assetverify where userid='$userid'";
$rst=mysqli_query($conn,$qry);
$rr=mysqli_fetch_assoc($rst);
if(isset($_POST['submit']))
{

$asset=$_POST['asset'];
$currency=$_POST['currency'];
if($rr['a']==0)
{
	$qq="insert into assetverify (userid,asset,currency,assetverify) values ('$userid',$asset,'$currency',1)";
	
}
else {
	$qq="update assetverify set asset=$asset,currency='$currency',assetverify=1 where userid='$userid'"; 
}
mysqli_query($conn,$qq);
$qqq="update bankasset set verify=1 where userid='$userid' and id=$id";
echo $qqq;

mysqli_query($conn,$qqq);
}

?>
			
	</body>
</html>