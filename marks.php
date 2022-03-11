<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<?php  

		$roll_no=12345;
		$name="Rajeev";
		$phy=50;
		$che=50;
		$math=10;
		$total=$phy+$che+$math;
		$avg=$total/3;
		if($avg>0 and $avg<30)
		{
			echo "====================";
			echo "<br/>Name :".$name;
			echo "<br/>Roll number :".$roll_no;
			echo "<br/>Result  : Fail";
			echo "<br/>====================";

		}
		else if($avg>=30 and $avg<45)
		{
			echo "====================";
			echo "<br/>Name :".$name;
			echo "<br/>Roll number :".$roll_no;
			echo "<br/>Result  : III";
			echo "<br/>====================";

		}
		else if($avg>=45 and $avg<60)
		{
			echo "====================";
			echo "<br/>Name :".$name;
			echo "<br/>Roll number :".$roll_no;
			echo "<br/>Result  : II";
			echo "<br/>====================";

		}
		else if($avg>=60)
		{
			echo "====================";
			echo "<br/>Name :".$name;
			echo "<br/>Roll number :".$roll_no;
			echo "<br/>Result  : I";
			echo "<br/>====================";

		}

	?>

</body>
</html>