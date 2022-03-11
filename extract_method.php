<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php  
		extract($_POST);
		// if(@$_POST['get'])
		// {
		if(isset($get))
		{
			// $a=$_POST['abc'];
			// $b=$_POST['abcd'];
			// echo "$a and $b";
			echo $abc." and ".$abcd;
		}
	?>

	<form method="post">
		<input type="text" name="abc">
		<br/>
		<input type="text" name="abcd">
		<br/>
		<input type="submit" name="get">
	</form>

</body>
</html>