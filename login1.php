<html>
	<head>
		<title>UserLogin</title>
	    <script type="text/javascript">
			function validate()
			{
			var a = document.login.username.value;
			if(a=="") 
			{
			alert("Please enter your username");
			document.login.username.focus();
			return false;
			}
			var b = document.forms["login"]["password"].value;
			if (b == "") 
			{
			alert("Please enter your password");
			return false;
			}
			}
		</script>
</head>
<body>
	<form name="login" method="post" action="Login.php" onsubmit="return validate();" >   
      	<div class="login-wrap"> 
      		<table>
      			<tr>
      				<td>Email</td>
      				<td><input type="text" name="username" required="required" autocomplete="off"  autofocus /></td>
      			</tr>
      			<tr>
      				<td>Password</td>
      				<td><input type="password" name="password" required="required" /></td>
      			</tr>
      		</table>           
            
            <button type="submit">Login</button>
        </div>
      </form>
   </body>
   </html>