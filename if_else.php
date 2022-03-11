<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<ul>
	<li>Arithmatic</li> +,-,*,/,%
	<li>Realtional</li> <,>,<=,>=,==,!=
	<li>Logical</li>    &&,||,!
	<li>Inc/Dec</li>    ++,--
	<li>Assginment</li>  =
	<li>Ternary</li>   (cond)?true:false
</ul>
<ul>
	<li>Statements</li>
	<li>if</li>
	<li> if else</li>
	<li>if else if</li>
	<li>switch case</li>
</ul>
<ul>
	<li>while </li>
	<li>do while</li>
	<li>for</li>
	<li>nested while</li>
	<li>nested for</li>
	<li>foreach</li>
</ul>
	<?php 
			$num=5;

			if($num>0)
			{
				echo "My max number is ".$num;
			}
			echo "<br/>";

			if(0<$num)
			{
				echo "My max number is ".$num;
			}
			echo "<br/>";
			$num=-6;
			if($num>0)
			{
				echo "<br/>My postive number is ".$num;
			}
			else
			{
				echo "<br/>My negative number is ".$num;
			}
			echo "<br/>";
			$num1=5;
			if($num1%2==0)
			{
				?>
						<div style="text-align: center; color: green;font-size: 24px;">
							This is a evene Number :
							<?php echo $num1; ?>
								
						</div>
				<?php
			}
			else
			{
				echo "<div style='text-align: center; color: red; font-size:24px'>";
					echo "This is a evene Number :".$num1;
				echo "</div>";
			}
		 extract($_POST);
	if(@$_POST['max_btn'])	
	{
		// echo "<pre>";
		// print_r($_POST);

			// $a=$_POST['a1'];
			// $b=$_POST['b1'];
			// $c=$_POST['c1']; 
		echo "Fisrt value ".$a1." ".$b1." ".$c1;
			if($a>$b)
			{
				if($a>$c)
				{
					echo "<br/>The max number is ".$a;
				}
				else
				{
					echo "<br/>The max number is ".$c;
				}
			}
			else if($b>$c)
			{
					echo "<br/>The max number is ".$b;
			}
			else
			{
				echo "<br/>The max number is ".$c;
			}
	}

	?>

		<form method="post">
			<input type="text" name="a1" placeholder="Enter a first number ?">
			<br/>
			<input type="text" name="b1" placeholder="Enter a second number ?">
			<br/>
			<input type="text" name="c1" placeholder="Enter a thrid number ?">
			<br/>
			<input type="submit" name="max_btn">
		</form>

</body>
</html>