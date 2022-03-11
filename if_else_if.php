<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
		extract($_POST);
		if(isset($max_four))
		{
			if($a>$b && $a>$c && $a>$d)
			{
echo "<div style='text-align:center;color:green;font-size:24px'>";
						echo "The max salary is ".$a;
echo "</div>";
			}
			else if($b>$a && $b>$c && $b>$d)
			{
				echo "<div style='text-align:center;color:green;font-size:24px'>";
						echo "The max salary is ".$b;
				echo "</div>";
			}
			else if($c>$a && $c>$b && $c>$d)
			{
				echo "<div style='text-align:center;color:green;font-size:24px'>";
						echo "The max salary is ".$c;
				echo "</div>";
			}
			else
			{
				echo "<div style='text-align:center;color:green;font-size:24px'>";
						echo "The max salary is ".$d;
				echo "</div>";
			}
		}

	?>
<form method="post">
	<table border="1" align="center" width="50%">
		<tr>
			<td colspan="2"><div style="text-align:center; font-size: 24px;">Get Max Salary </div></td>
		</tr>
		<tr>
			<td><label>Enter a first person salary </label></td>
			<td><input type="text" name="a"></td>
		</tr>
		<tr>
			<td><label>Enter a second person salary </label></td>
			<td><input type="text" name="b"></td>
		</tr>
		<tr>
			<td><label>Enter a thrid person salary </label></td>
			<td><input type="text" name="c"></td>
		</tr>
		<tr>
			<td><label>Enter a four person salary </label></td>
			<td><input type="text" name="d"></td>
		</tr>
		<tr>
			<td colspan="2">
				<div align="center">
					<input type="submit" name="max_four" value="Max For">
				</div>
			</td>
			
		</tr>
	</table>
	</form>	

</body>
</html>