<!DOCTYPE html>
<html>
<head>
	<title>Calculation</title>
</head>
<body>
	<?php
		for ($i=0; $i < 6; $i++) 
		{ 
			$enroll[] = $_POST['enroll'.$i];
			$name[] = $_POST['student_name'.$i];
			$phy[] = $_POST['phy'.$i];
			$chem[] = $_POST['chem'.$i];
			$maths[] = $_POST['maths'.$i];
		}
		//print_r($phy);
		//echo $enroll;
	?>
	<table align="center" border="1">
		<tr>
			<th>Sr No</th>
			<th>Enrollment No</th>
			<th>Name</th>
			<th>Percentage</th>
			<th>Grade</th>
			<th>Remarks</th>
		</tr>
		<?php
			for ($i=0; $i < 6; $i++) 
			{ 
		?>
		<tr>
			<td><?php echo $i+1; ?></td>
			<td>
				<?php echo $enroll[$i]; ?>
			</td>
			<td>
				<?php echo $name[$i]; ?>
			</td>
			<td>
				<?php 
					$sum = $phy[$i] + $chem[$i] + $maths[$i];
					$Perc = ($sum*100)/300;
					$Perc = round($Perc,2);
					echo $Perc."%"; 
				?>
			</td>
			<td>
				<?php
					$grade = getGrade($Perc);
					$tempArr = explode('-',$grade);
					$grade=$tempArr[0];
					$remarks=$tempArr[1];
					$color=$tempArr[2];
					echo $grade;
				?>
			</td>
			<td style="background-color: <?php echo $color; ?>;">
				<?php
					//$remarks = getRemarks($grade);
					echo $remarks;
				?>
			</td>
		</tr>
		<?php
			}
		?>
	</table>

	<?php
		function getGrade($Perc)
		{
			if ($Perc>=0 && $Perc<=34.99) 
			{
				return "fail-Fail-#FF0000";
			}
			elseif ($Perc>=35 && $Perc<=49.99) 
			{
				return "pass-Poor Performance-#E46D0A";
			}
			elseif ($Perc>=50 && $Perc<=59.99) 
			{
				return "second-Average Performance-#31849B";
			}
			elseif ($Perc>=60 && $Perc<=69.99) 
			{
				return "first-Good-#60497B";
			}
			elseif ($Perc>=70 && $Perc<=84) 
			{
				return "dist-Very Good-#75923C";
			}
			elseif ($Perc>84 && $Perc<=100) 
			{
				return "Excellent-Beware of Over Confidence-#0066FF";
			}
		}
		/*function getRemarks($grade)
		{
			if ($grade=="fail") 
			{
				return "Fail";
			}
			elseif ($grade=="pass") 
			{
				return "Poor Performance";
			}
			elseif ($grade=="second") 
			{
				return "Average Performance";
			}
			elseif ($grade=="first") 
			{
				return "Good";
			}
			elseif ($grade=="dist") 
			{
				return "Very Good";
			}
			elseif ($grade=="Excellent") 
			{
				return "Beware of over confidence";
			}
			else 
			{
				return "Nothing";
			}
		}*/

	?>
</body>
</html>