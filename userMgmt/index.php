<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="bg">
	<form action="verification.php" method="post">
		<table align="center"class="loginTB" cellpadding="4">
			<tr>
				<th colspan="2">Enter Username & Password</th>
			</tr>
			<tr>
				<td>Username:</td>
				<td>
					<input type="text" name="uname">
				</td>
			</tr>
			<tr>
				<td>Password:</td>
				<td>
					<input type="password" name="pwd">
				</td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;">
					<input type="submit" value="Login">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>