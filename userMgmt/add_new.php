<?php
	session_start();
	if(!isset($_SESSION['login']))
	{
		header("Location:logout.php");
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="bg">
	<?php
		include("hMenu.php");
		include 'db.php';
	?>
	<form action="operations.php" method="post">
		<table align="center" border="1" class="userTB">
			<tr>
				<td>Enter Login Name:</td>
				<td>
					<input type="text" name="uname">
				</td>
			</tr>
			<tr>
				<td>Enter Password:</td>
				<td>
					<input type="password" name="pwd">
				</td>
			</tr>
			<tr>
				<td>User Type:</td>
				<td>
					<select name="utype">
						<option value="admin">Admin</option>
						<option value="regular">Regular</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;">
					<input type="submit" value="Create">
				</td>
			</tr>
			<input type="hidden" name="fromWhere" value="createUser">
		</table>
	</form>
</body>
</html>