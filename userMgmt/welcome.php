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
	?>
</body>
</html>