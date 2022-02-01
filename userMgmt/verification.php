<?php
	session_start();
	$uname = $_POST['uname'];
	$pwd = $_POST['pwd'];
	include("db.php");
	$sql = "select * from user_master";
	$result = mysqli_query($conn,$sql);
	while ($row = mysqli_fetch_array($result)) 
	{
		$userName[] = $row['login_name'];
		$userPwd[] = $row['pwd'];
		$userType[]=$row['type'];
	}
	//print_r($userPwd);
	$flag=0;
	for($i=0;$i<count($userName);$i++)
	{
		if ($uname==$userName[$i] && $pwd==$userPwd[$i]) 
		{
			$_SESSION['uname']=$userName[$i];
			$_SESSION['utype']=$userType[$i];
			$_SESSION['login']="yes";
			$flag=1;
			break;
		}
	}
	if ($flag==1) 
	{
		header("Location: welcome.php");
	}
	else
	{
		header("Location: logout.php");
	}
?>