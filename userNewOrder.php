<html>
	<head>
		<title>New Order</title>
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

			<?php echo $userid ?>	
		<h2>New Order</h2>
		<form method="post" action="saveorder.php">
			<input type="hidden" name="userid" value="<?php echo $userid ?>"/>
			<p>New Order</p>
			<p>I want to 
				<select name="buysell">
					<option value="Buy">Buy</option>
					<option value="Sell">Sell</option>
				</select>
				 at least
				 <input type="text" name="range1"/>
				 up to <input type="text" name="range2"/>
				 <select name="bit">
				 	<optgroup label="Crypto">
				 	<option value="BTC">BTC</option>
				 	<option value="ETH">ETH</option>
				 	</optgroup>
				 </select>
				 at <input type="text" name="price"/>
				 <select name="currency">
				 	<optgroup label="Currency">
				 		<option value="USD">USD</option>
				 		<option value="SGD">SGD</option>
				 	</optgroup>
				 </select>
				 /BTC(or)ETH
				</p>
				<input type="submit" value="Submit" />
		</form>
	</body>
</html>