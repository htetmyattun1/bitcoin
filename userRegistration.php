<html>
	<head>
		<title>User Registration</title>
	</head>
	<body>
		<h2>User Registration</h2>
		<form action="saveuser.php" name="userregistration" method="post" >
			<table>
				<tr>
					<td>First Name</td>
					<td><input type="text" name="firstname" required="required" autocomplete="off"  autofocus /></td>
				</tr>
				<tr>
					<td>Last Name</td>
					<td><input type="text" name="lastname" required="required" autocomplete="off"  autofocus /></td>
				</tr>
				<tr>
					<td>User Id</td>
					<td><input type="text" name="userid" required="required" autocomplete="off"  autofocus /></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" required="required" autocomplete="off"  autofocus /></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" required="required" autocomplete="off"  autofocus /></td>
				</tr>
				<tr>
					<td>Confrim Password</td>
					<td><input type="password" name="confrimpassword" required="required" autocomplete="off"  autofocus /></td>
				</tr>
				
			</table>
			<button type="submit">Register</button>
		</form>
	</body>
</html>