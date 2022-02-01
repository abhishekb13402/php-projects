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
		if(isset($_POST['fromWhere']))
		{
				$newUname= $_POST['uname'] ;
				$newPwd= $_POST['pwd'];
				$newUtype= $_POST['utype'];

				//echo $newUname;
				$sql = "insert into user_master(login_name,pwd,type) values('$newUname','$newPwd','$newUtype') ";
				$result = mysqli_query($conn,$sql);
				header("Location: user.php");
		}
		if (isset($_POST['edit'])) 
			{
				//echo $_POST['edit'];
				$uid = $_POST['uid'];
				//echo $uid;
				$uname= $_POST['uname'];
				$sql = "update user_master set login_name='$uname' where id='$uid'";
				$result=mysqli_query($conn,$sql);
				if(!$result)
				{
					//echo "connection not established";
					die("Edit Error:".mysqli_error($conn));
				}
				header("Location:user.php");
			}
		if(isset($_REQUEST['ch']))
		{
			$ch = $_REQUEST['ch'];
			$id = $_REQUEST['id'];
			
		}
		if ($ch==1) 
		{
			$sql = "select * from user_master where id='$id'";
			$result = mysqli_query($conn,$sql);
			while ($row=mysqli_fetch_array($result)) 
			{
				$userId = $row['id'];
				$userName= $row['login_name'];
				$userType=$row['type'];
				$userCreate= $row['createdOn'];
			}
			?>
			<form action="operations.php" method="post">
				<table align="center" border="1" class="userTB">
					<tr>
						<td>User Id</td>
						<td>
							<input type="text" name="uid" value="<?php echo $userId; ?>" readonly="readonly" >
						</td>
					</tr>
					<tr>
						<td>Login Name</td>
						<td>
							<input type="text" name="uname" value="<?php echo $userName;?>" >
						</td>
					</tr>
					<tr>
						<td>Type</td>
						<td>
							<input type="text" name="utype" value="<?php echo $userType;?>" disabled="disabled" >
						</td>
					</tr>
					<tr>
						<td colspan="2" style="text-align: center;">
							<input type="submit" name="edit" value="Update">
						</td>
					</tr>
				</table>
			</form>
			<?php

		}
		elseif ($ch==2) 
		{
			$sql = "delete from user_master where id='$id'";
			$result = mysqli_query($conn,$sql);
			if(!$result)
			{
				//echo "connection not established";
				die("Deletion Error:".mysqli_error($conn));
			}
			header("Location:user.php");
		}
	?>
</body>
</html>