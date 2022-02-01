	<div class="hMenu">
		<ul>
			<li><a href="welcome.php">Home</a></li>
			<li><a href="user.php">Users</a></li>
			<?php 
				if($_SESSION['utype']=="admin")
				{
			?>
			<li><a href="add_new.php">Create</a></li>
			<?php
				}
			?>
			<li><a href="change_pwd.php">Change Password</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
		<div style="color:white; text-align: right; padding-right: 20px;">
			Welcome, <?php echo $_SESSION['uname']; ?>
		</div>
	</div> 