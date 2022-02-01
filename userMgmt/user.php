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
		include('db.php');
		$sql = "select * from user_master";
		$result = mysqli_query($conn,$sql);
		while ($row=mysqli_fetch_array($result)) 
		{
			$userId[] = $row['id'];
			$userName[]= $row['login_name'];
			$userType[]=$row['type'];
			$userCreate[]= $row['createdOn'];
		}
	?>
	<table align="center" border="1" class="userTB">
		<tr>
			<th>Sr</th>
			<th>User Id</th>
			<th>User Name</th>
			<th>User Type</th>
			<th>Created On</th>
			<th>Update</th>
			<th>Delete</th>
		</tr>

		<?php
			for ($i=0; $i < count($userName) ; $i++) 
			{ 
		?>
			<tr>
				<td><?php echo $i+1 ; ?></td>
				<td><?php echo $userId[$i]; ?></td>
				<td><?php echo $userName[$i]; ?></td>
				<td><?php echo $userType[$i]; ?></td>
				<td><?php echo $userCreate[$i]; ?></td>
				<td>
					<a href="operations.php?ch=1&id=<?php echo $userId[$i];?>">
					Update
					</a>
				</td>
				<td>
					<a href="operations.php?ch=2&id=<?php echo $userId[$i];?>">
					Delete
					</a>
				</td>
			</tr>
		<?php
			}
		?>
	</table>
</body>
</html>