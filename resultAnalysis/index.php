<!DOCTYPE html>
<html>
<head>
	<title>Result Analysis</title>
</head>
<body>
	<form action="calculation.php" method="post">
	<table align="center" border="1">
		<tr>
			<th>Sr</th>
			<th>Enrollment No</th>
			<th>Name</th>
			<th>Phy</th>
			<th>Chem</th>
			<th>Maths</th>
		</tr>
		<?php
			for ($i=0; $i < 6; $i++) 
			{ 

		?>
		<tr>
			<td><?php echo $i+1; ?></td>
			<td>
				<input type="number" name="<?php echo 'enroll'.$i; ?>">
			</td>
			<td>
				<input type="text" name="<?php echo 'student_name'.$i; ?>">
			</td>
			<td>
				<input type="number" name="<?php echo 'phy'.$i; ?>" min="0" max="100">
			</td>
			<td>
				<input type="number" name="<?php echo 'chem'.$i; ?>" min="0" max="100">
			</td><td>
				<input type="number" name="<?php echo 'maths'.$i; ?>" min="0" max="100">
			</td>
		</tr>
		<?php
			}
		?>
		<tr>
			<td colspan="6" style="text-align: center;">
				<input type="submit" value="Calculate">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>